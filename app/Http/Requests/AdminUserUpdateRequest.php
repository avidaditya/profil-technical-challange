<?php

namespace App\Http\Requests;

use App\Enums\UserRoleEnum;
use Illuminate\Validation\Rules\Password;

class AdminUserUpdateRequest extends BaseRequest
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
            'password' => 'Kata Sandi',
            'role' => 'Role',
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
            'password' => [Password::min(8)],
            'role' => 'required|in:' . implode(",", [UserRoleEnum::Admin(), UserRoleEnum::Editor(), UserRoleEnum::Moderator()]),
        ];
    }
}
