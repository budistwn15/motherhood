<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'username' => [
                'required',
                Rule::unique('users','username')->ignore($this->user->username ?? null, 'username')
            ],
            'name' => [
                'required'
            ],
            'email' => [
                Rule::requiredIf($this->isMethod('post')),
                'email',
                'string',
                Rule::unique('users','email')->ignore($this->user->email ?? null, 'email')
            ],
            'password' => [
                'required'
            ],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
