<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        //cek apakah Create atau Update
        if ($this->method() == 'PATCH') {
            $nisn_rules = 'required|string|size:4|
            unique:siswa,nisn,' . $this->get('id');
            $telepon_rules = 'sometimes|nullable|numeric|
            digits_between:10,15|unique:telepon,nomor_telepon,'
                . $this->get('id') . ',id_siswa';
        } else {
            $nisn_rules = 'required|string|size:4|
            unique:siswa,nisn';
            $telepon_rules = 'sometimes|nullable|numeric|
            digits_between:10,15|unique:telepon,nomor_telepon';
        }
        return [
            'nisn' => $nisn_rules,
            'nama_siswa' => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'nomor_telepon' => $telepon_rules,
            'id_kelas' => 'required',
            'foto' => 'sometimes|nullable|image|mimes:png,jpg,jpeg|
                        max:500|dimensions:width=150,height:180',
        ];
    }
}
