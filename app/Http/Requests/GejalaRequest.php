<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GejalaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'kode_gejala' => [
                'required',
                'max:25',
                Rule::unique('gejalas','kode_gejala')->ignore($this->gejala->kode_gejala ?? null, 'kode_gejala')
            ],
            'nama_gejala' => [
                'required'
            ]
        ];
    }
}
