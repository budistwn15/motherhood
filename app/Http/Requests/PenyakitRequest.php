<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PenyakitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'kode_penyakit' => [
                'required',
                'max:25',
                Rule::unique('penyakits','kode_penyakit')->ignore($this->penyakit->kode_penyakit ?? null, 'kode_penyakit')
            ],
            'nama_penyakit' => [
                'required'
            ]
        ];
    }
}
