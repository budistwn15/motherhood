<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdentitasRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama' => [
                'required'
            ],
            'umur' => [
                'required',
                'numeric'
            ],
            'pekerjaan' => [
                'required'
            ],
            'alamat' => [
                'required'
            ]
        ];
    }
}
