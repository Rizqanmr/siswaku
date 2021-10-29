<?php
Route::get('siswa', function ()
{
    $siswa = 
    ['Cak Mamat', 'Taylor Ayam',
    'Rich Wadon','John Tor'];
    return view('siswa.daftar_siswa', compact('siswa'));
});