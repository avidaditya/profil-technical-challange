<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class CompleteDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::user();
        if ($user && $user->hasRole('member') && !$user->consent_date) {
            return true;
        }
        return false;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'occupation' => 'Pekerjaan',
            'occupation_other' => 'Pekerjaan Lainnya',
            'password' => 'Kata Sandi',
            'terms_agreement' => 'Syarat & Ketentuan',
            'policy_agreement' => 'Kebijakan Privasi',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'occupation' => 'required',
            'occupation_other' => 'required_if:occupation,Lainnya',
            'password' => ['required', 'confirmed', Password::min(8)],
            'terms_agreement' => 'required',
            'policy_agreement' => 'required',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $exception = $validator->getException();

        Session::flash('errorCompleteDataForm', true);
        $messages = $validator->errors()->messages();
        foreach ($messages as $field => $message) {
            $fieldCamelCase = str_replace(' ', '', ucwords(str_replace('_', ' ', $field)));
            Session::flash('errorCompleteData' . ucfirst($fieldCamelCase) . 'Input', implode('<br>', $message));
        }
        $inputs = request()->all();
        foreach ($inputs as $field => $value) {
            $fieldCamelCase = str_replace(' ', '', ucwords(str_replace('_', ' ', $field)));
            Session::flash('valueCompleteData' . ucfirst($fieldCamelCase) . 'Input', $value);
        }

        toast('Gagal melakukan konfirmasi data', 'error');

        throw (new $exception($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo($this->getRedirectUrl());
    }
}
