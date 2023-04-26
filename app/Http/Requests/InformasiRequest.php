<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InformasiRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama' => [
                'required'
            ],
            'keterangan' => [
                'required'
            ],
            'gambar' => [
                Rule::requiredIf($this->isMethod('post')),
                'max:3024',
                'mimes:jpeg,jpg,png,webp'
            ],
        ];
    }
}
