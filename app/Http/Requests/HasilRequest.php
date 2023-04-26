<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HasilRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'G01' => ['required'],
            'G02' => ['required'],
            'G03' => ['required'],
            'G04' => ['required'],
            'G05' => ['required'],
            'G06' => ['required'],
            'G07' => ['required'],
            'G08' => ['required'],
            'G09' => ['required'],
            'G10' => ['required'],
            'G11' => ['required'],
            'G12' => ['required'],
            'G13' => ['required'],
            'G14' => ['required'],
            'G15' => ['required'],
            'G16' => ['required'],
            'G17' => ['required'],
            'G18' => ['required'],
            'G19' => ['required'],
            'G20' => ['required'],
            'G21' => ['required'],
            'G22' => ['required'],
            'G23' => ['required'],
            'G24' => ['required'],
            'G25' => ['required'],
            'G26' => ['required'],
            'G27' => ['required'],
            'G28' => ['required'],
            'G29' => ['required'],
            'G30' => ['required'],
            'G31' => ['required'],
            'G32' => ['required'],
            'G33' => ['required'],
            'G34' => ['required'],
            'G35' => ['required'],
            'G36' => ['required'],
            'G37' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'G01.required' => 'Gejala harus diisi',
            'G02.required' => 'Gejala harus diisi',
            'G03.required' => 'Gejala harus diisi',
            'G04.required' => 'Gejala harus diisi',
            'G05.required' => 'Gejala harus diisi',
            'G06.required' => 'Gejala harus diisi',
            'G07.required' => 'Gejala harus diisi',
            'G08.required' => 'Gejala harus diisi',
            'G09.required' => 'Gejala harus diisi',
            'G10.required' => 'Gejala harus diisi',
            'G11.required' => 'Gejala harus diisi',
            'G12.required' => 'Gejala harus diisi',
            'G13.required' => 'Gejala harus diisi',
            'G14.required' => 'Gejala harus diisi',
            'G15.required' => 'Gejala harus diisi',
            'G16.required' => 'Gejala harus diisi',
            'G17.required' => 'Gejala harus diisi',
            'G18.required' => 'Gejala harus diisi',
            'G19.required' => 'Gejala harus diisi',
            'G20.required' => 'Gejala harus diisi',
            'G21.required' => 'Gejala harus diisi',
            'G22.required' => 'Gejala harus diisi',
            'G23.required' => 'Gejala harus diisi',
            'G24.required' => 'Gejala harus diisi',
            'G25.required' => 'Gejala harus diisi',
            'G26.required' => 'Gejala harus diisi',
            'G27.required' => 'Gejala harus diisi',
            'G28.required' => 'Gejala harus diisi',
            'G29.required' => 'Gejala harus diisi',
            'G30.required' => 'Gejala harus diisi',
            'G31.required' => 'Gejala harus diisi',
            'G32.required' => 'Gejala harus diisi',
            'G33.required' => 'Gejala harus diisi',
            'G34.required' => 'Gejala harus diisi',
            'G35.required' => 'Gejala harus diisi',
            'G36.required' => 'Gejala harus diisi',
            'G37.required' => 'Gejala harus diisi',
        ];
    }
}
