<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'judul' => [
                'required'
            ],
            'isi' => [
                'required'
            ],
            'link' => [
                'required'
            ]
        ];
    }
}
