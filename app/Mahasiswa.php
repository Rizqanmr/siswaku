<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama_mhs',
        'alamat',
        'jenis_kelamin',
        'prodi',
        'jurusan',
        'kelas',
        'angkatan'
    ];
}
