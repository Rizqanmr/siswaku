<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 
use Illuminate\Routing\Route;
*/


Route::get('/', 'PagesController@homepage');
Route::get('about', 'PagesController@about');
Route::get('contact', 'ContactController@contact');

Route::get('profile', 'ProfileController@profile');
Route::get('profile/create', 'ProfileController@create');
Route::get('profile/{mahasiswa}/edit', 'ProfileController@edit');
Route::patch('profile/{mahasiswa}', 'ProfileController@update');
Route::get('profile/{mahasiswa}', 'ProfileController@show');
Route::post('profile', 'ProfileController@store');
Route::delete('profile/{mahasiswa}', 'ProfileController@destroy');


Route::get('siswa', 'SiswaController@index');
Route::get('siswa/create', 'SiswaController@create');
Route::get('siswa/{siswa}/edit', 'SiswaController@edit');
Route::patch('siswa/{siswa}', 'SiswaController@update');
Route::get('siswa/{siswa}', 'SiswaController@show');
Route::delete('siswa/{siswa}', 'SiswaController@destroy');
Route::post('siswa', 'SiswaController@store');
//Route::get('tes-collection', 'SiswaController@tesCollection');
Route::get('date-mutator', 'SiswaController@dateMutator');

Route::get('sampledata', function () {
    DB::table('mahasiswa')->insert([
        [
            'nim' => '4817080111',
            'nama_mhs' => 'Cak Mamat',
            'alamat' => 'Jakarta Timur',
            'jenis_kelamin' => 'L',
            'prodi' => 'Teknik Energi Nuklir',
            'jurusan' => 'S1 Teknik Nuklir',
            'kelas' => '1A',
            'angkatan' => '2',
            'created_at' => '2020-04-15 15:35:02',
            'updated_at' => '2020-04-15 15:35:02'
        ],
    ]);
});
Route::get('sampledata_profile', function () {
    DB::table('profile')->insert([

        'nama' => 'Rizqan MR',
        'skill' => 'Kotlin',
        'personal_note' => 'Kotlin Lorem ipsum',
        'foto' => 'testpathfoto',
        'created_at' => '2020-03-18 12:41:02',
        'updated_at' => '2020-03-18 12:41:02'

    ]);
});

Route::get('sampledata_contact', function () {
    DB::table('contact')->insert([

        'nama_pjg' => 'Cak Mamat',
        'email_pjg' => 'cakmamat@mail.com',
        'no_handphone_pjg' => '08123456789',
        'subject' => 'Tugas4',
        'pesan' => 'Tugas 4 Pemograman web 3 membuat 
            data migration dan sample data',
        'created_at' => '2020-03-18 12:41:02',
        'updated_at' => '2020-03-18 12:41:02'

    ]);
});
/*
Route::get('siswa', function () {
    $halaman = 'siswa';
    $siswa = ['Cak Mamat', 'Taylor Ayam', 'Rich Wadon', 'John Tor'];
    return view('siswa.index', compact('halaman', 'siswa'));
});
Route::get('halaman-rahasia', function () {
    return 'Anda sedang melihat <strong>Halaman Rahasia</strong>';
})->name('secret');
Route::get('showmesecret', function () {
    return redirect()->route('secret');
});
*/
