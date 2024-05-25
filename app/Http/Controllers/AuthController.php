<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\CompleteDataRequest;
use App\Http\Requests\RegisterMemberRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Validator;

class AuthController extends Controller
{
    private $redirectAfterResetPassword = '/';

    public function adminLogin()
    {
        return view('auth.admin-login');
    }

    public function adminLoginAttempt(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && !$user->hasRole('member') && Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin-panel.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah',
            'password' => 'Email atau kata sandi salah',
        ])->onlyInput('email');
    }

    public function memberLoginAttempt(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && $user->hasRole('member') && Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return back()->with('toast_success', 'Login Berhasil.');
        }

        return redirect()->back()->with([
            'errorAuthForm' => true,
            'emailMember' => $request->email,
            'passwordMember' => $request->password,
            'errorEmailMember' => 'Email atau kata sandi salah',
            'errorPasswordMember' => 'Email atau kata sandi salah'
        ]);
    }

    public function ubahProfile(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
        ]);

        $user = User::where('id', Auth::id())->update(['name'=>$request->name]);

        return redirect()->back()->with([
            'successAuthForm' => true,
        ]);
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function forgotPasswordSubmit(Request $request)
    {

        $rules = [
            'email' => 'required|email',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

         // Check if validation fails
        if ($validator->fails()) {
            // Redirect back with custom logic
            toast($validator->errors()->all()[0], 'error');

            return redirect()->back()
                ->with(['resetPasswordEmail'=>true,'email'=>$request->email,'errorEmailForget'=>"Email kamu salah"]);
        }


        $status = Password::sendResetLink(
            $request->only('email')
        );

        if($status == 'passwords.user'){
            toast('Akun dengan email ini tidak ditemukan', 'error');

            return redirect()->back()
                ->with(['resetPasswordEmail'=>true,'email'=>$request->email,'errorEmailForget'=>"Email kamu tidak ditemukan"]);
        }

        return $status === Password::RESET_LINK_SENT
                    ? back()->with([
                        'changePasswordSuccess'=>true
                        ])
                    : back()->with([
                        'changePasswordThrottled' => true
                        ]);
    }

    public function passwordReset(Request $request, string $token)
    {
        $email = $request->get('email');
        $isAdmin = false;

        if ($email) {
            $user = User::where('email', $email)->first();
            if ($user) {
                $isAdmin = !$user->hasRole('member');
            }
        }
        return redirect('/')->with(['resetPassword'=>true,'token' => $token, 'isAdmin' => $isAdmin,'email'=>$email]);
    }

    public function passwordResetSubmit(Request $request)
    {
        $rules = [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ];

        $validator = Validator::make($request->all(), $rules);

         // Check if valida_ion fails
         if ($validator->fails()) {
            // Redirect back with custom logic
            toast($validator->errors()->all()[0], 'error');

            return redirect()->back()
                ->with(['resetPassword'=>true,
                'error_password'=>$validator->errors()->all()[0],
                'email'=>$request->email,
                'token'=>$request->token]);
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                if (!$user->hasRole('member')) {
                    $this->redirectAfterResetPassword = route('admin-login');
                }

                event(new PasswordReset($user));
            }
        );


        return $status === Password::PASSWORD_RESET
                    ? redirect($this->redirectAfterResetPassword)->with([
                        'toast_success' => __($status),
                        'resetPasswordSuccess'=>true])
                    : back()->with(['toast_error' => [__($status)],
                    // 'resetPassword'=>true,
                    'errorResetPassword'=>"Password Tidak terreset",
                    'password'=>$request->password,
                    'password_confirmation'=>$request->password_confirmation,
                    'email'=>$request->email,
                    'token'=>$request->token
                ]);
    }

    public function logout()
    {
        $redirectTo = '/';
        /** @var \App\Models\User */
        $user = Auth::user();
        if ($user) {
            $isMember = $user->hasRole('member');
            Auth::logout();
            if (!$isMember) {
                $redirectTo = route('admin-login');
            }
        }
        return redirect($redirectTo);
    }

    public function registerMember(RegisterMemberRequest $request)
    {
        $exists = User::where('email', $request->input('email'))->first();
        if ($exists) {
            return redirect()->back()->with('toast_error', 'Email ini telah digunakan');
        }

        $occupation = $request->input('occupation');
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'consent_date' => Carbon::now(),
        ]);
        $user->assignRole(UserRoleEnum::Member);

        event(new Registered($user), url()->previous());

        return redirect()->back()->with([
            'successRegisterModal' => true,
            'registerSuccessEmail' => $user['email'],
        ]);
    }

    public function verifyEmailVerication(Request $request, $id, $hash)
    {
        $user = User::where('id', $id)->role([UserRoleEnum::Member()])->firstOrFail();

        if (! hash_equals((string) $user->getKey(), (string) $id)) {
            return redirect($request->get('back'))->with('toast_error', 'Gagal melakukan verifikasi email.');
        }

        if (! hash_equals(sha1($user->getEmailForVerification()), (string) $hash)) {
            return redirect($request->get('back'))->with('toast_error', 'Gagal melakukan verifikasi email.');
        }

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();

            event(new Verified($user));
        }

        return redirect($request->get('back'))->with('toast_success', 'Email berhasil di verifikasi.');
    }

    public function redirectToProvider(Request $request, $provider)
    {
        if ($request->has('redirectTo')) {
            $request->session()->put('redirectTo', $request->get('redirectTo'));
        }
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(Request $request, $provider)
    {
        $redirectTo = $request->session()->pull('redirectTo');
        if (!in_array($provider, ['google', 'facebook'])) {
            abort(404);
        }

        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect($redirectTo);
        }

        $dataUser = User::where('email', $user->getEmail())->first();
        $provider_id = $provider . '_id';

        if ($dataUser) {
            $dataUser->{$provider_id} = $user->getId();
            $dataUser->save();
        } else {
            $dataUser = new User();
            $dataUser->name = $user->getName();
            $dataUser->email = $user->getEmail();
            $dataUser->email_verified_at = Carbon::now();
            $dataUser->password = Hash::make(Str::password(16, true, true, true));

            $dataUser->save();

            $dataUser->assignRole(UserRoleEnum::Member);
        }

        auth()->login($dataUser, true);
        return redirect($redirectTo);
    }

    public function completeData(CompleteDataRequest $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $occupation = $request->input('occupation');
        $user->occupation = $occupation === 'Lainnya' ? $request->input('occupation_other') : $occupation;
        $user->password = Hash::make($request->input('password'));
        $user->consent_date = Carbon::now();
        $user->marketing_consent = $request->input('marketing_agreement') === 'checklisted' ? true : false;

        $user->save();
        session()->forget('completeDataModal');
        return redirect()->back()->with('toast_success', 'Data berhasil dilengkapi.');
    }
}
