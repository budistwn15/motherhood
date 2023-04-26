<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SolusiRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'kode_solusi' => [
                'required',
                'max:25',
                Rule::unique('solusis','kode_solusi')->ignore($this->solusi->kode_solusi ?? null, 'kode_solusi')
            ],
            'nama_solusi' => [
                'required'
            ]
        ];
    }
}
