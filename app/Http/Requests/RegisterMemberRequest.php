<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Session;

class RegisterMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Nama',
            'email' => 'Email',
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Password::min(8)],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'terms_agreement.required' => ':attribute wajib dicentang',
            'policy_agreement.required' => ':attribute wajib dicentang',
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

        Session::flash('errorRegisterForm', true);
        $messages = $validator->errors()->messages();
        foreach ($messages as $field => $message) {
            $fieldCamelCase = str_replace(' ', '', ucwords(str_replace('_', ' ', $field)));
            Session::flash('errorRegister' . ucfirst($fieldCamelCase) . 'Input', implode('<br>', $message));
        }
        $inputs = request()->all();
        foreach ($inputs as $field => $value) {
            $fieldCamelCase = str_replace(' ', '', ucwords(str_replace('_', ' ', $field)));
            Session::flash('valueRegister' . ucfirst($fieldCamelCase) . 'Input', $value);
        }
        toast('Gagal melakukan registrasi', 'error');

        throw (new $exception($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo($this->getRedirectUrl());
    }
}
