<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class LocationSolutionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'solution'=>'required',
            'g-captcha-response' => recaptchaRuleName()
        ];
    }
    // ,
            // 'g-captcha-response' => recaptchaRuleName()

    protected function failedValidation(Validator $validator)
    {
        $exception = $validator->getException();

        toast($validator->errors()->all()[0], 'error');

        throw (new $exception($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo($this->getRedirectUrl());
    }

}
