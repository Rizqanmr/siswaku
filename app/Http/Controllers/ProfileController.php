<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use CreateTableMahasiswa;

class ProfileController extends Controller
{
    public function profile()
    {

        $mahasiswa_list = Mahasiswa::orderBy('nama_mhs', 'asc')->paginate(6);
        $jumlah_mahasiswa = $mahasiswa_list->count();
        return view('profile.profile', compact('mahasiswa_list', 'jumlah_mahasiswa'));
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('profile.show', compact('halaman', 'mahasiswa'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('profile');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('profile.edit', compact('mahasiswa'));
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect('profile');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect('profile');
    }
}
