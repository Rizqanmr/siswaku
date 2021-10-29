<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use CreateTableSiswa;
//use Illuminate\Support\Facades\Validator;
use App\Telepon;
use App\Kelas;
use App\Hobi;
use PhpParser\Node\Expr\New_;
use App\Http\Requests\SiswaRequest;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa_list = Siswa::orderBy('nama_siswa', 'asc')
            ->paginate(3);
        $jumlah_siswa = Siswa::count();
        return view('siswa.index', compact('siswa_list', 'jumlah_siswa'));
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        if (!empty($siswa->telepon->nomor_telepon)) {
            $siswa->nomor_telepon = $siswa->telepon->nomor_telepon;
        }
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Siswa $siswa, SiswaRequest $request)
    {
        $input = $request->all();

        //Update foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->updateFoto($siswa, $request);
        }

        //update data siswa
        $siswa->update($input);

        //update no.telp, jika sblmnya sdh ada no.telp
        $this->updateTelepon($siswa, $request);

        //update hobi
        $siswa->hobi()->sync($request->input('hobi_siswa'));

        return redirect('siswa');
    }

    public function store(SiswaRequest $request)
    {
        $input = $request->all();

        //Upload Foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        //Simpan data siswa
        $siswa = Siswa::create($input);

        //Simpan telepon
        if ($request->filled('nomor_telepon')) {
            $this->insertTelepon($siswa, $request);
        }

        //Simpan hobi
        $siswa->hobi()->attach($request->input('hobi_siswa'));

        return redirect('siswa');
    }

    public function destroy(Siswa $siswa)
    {
        //Hapus foto kalo ada
        $this->hapusFoto($siswa);

        $siswa->delete();
        return redirect('siswa');
    }

    private function insertTelepon(Siswa $siswa, SiswaRequest $request)
    {
        $telepon = new Telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $siswa->telepon()->save($telepon);
    }

    private function updateTelepon(Siswa $siswa, SiswaRequest $request)
    {
        if ($siswa->telepon) {
            //jika telp diisii, update
            if ($request->filled('nomor_telepon')) {
                $telepon = $siswa->telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $siswa->telepon()->save($telepon);
            }
            //jika telp tidak diisi, hapus
            else {
                $siswa->telepon()->delete();
            }
        }
        //buat entry baru, jika sblmnya tidak ada no.telp
        else {
            if ($request->filled('nomor_telepon')) {
                $telepon = new Telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $siswa->telepon()->save($telepon);
            }
        }
    }

    private function uploadFoto(SiswaRequest $request)
    {
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
        if ($request->file('foto')->isValid()) {
            $foto_name = date('YmdHis') . ".$ext";
            $request->file('foto')->move('fotoupload', $foto_name);
            return $foto_name;
        }
        return false;
    }

    private function updateFoto(Siswa $siswa, SiswaRequest $request)
    {
        //Jika user mengisi foto
        if ($request->hasFile('foto')) {
            //Hapus foto lama jika ada foto baru
            $exist = Storage::disk('foto')->exists($siswa->foto);
            if (isset($siswa->foto) && $exist) {
                $delete = Storage::disk('foto')->delete($siswa->foto);
            }
            //Upload foto baru
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            if ($request->file('foto')->isValid()) {
                $foto_name = date('YmdHis') . ".$ext";
                $upload_path = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);
                return $foto_name;
            }
        }
    }

    private function hapusFoto(Siswa $siswa)
    {
        $is_foto_exist = Storage::disk('foto')->exists($siswa->foto);

        if ($is_foto_exist) {
            Storage::disk('foto')->delete('$siswa->foto');
        }
    }

    public function dateMutator()
    {
        $siswa = Siswa::findOrFail(1);
        $nama = $siswa->nama_siswa;
        $tgl_lahir = $siswa->tanggal_lahir->format('d-m-Y');
        $ulang_tahun = $siswa->tanggal_lahir
            ->addYears(31)->format('d-m-Y');
        return "Siswa {$nama} lahir pada tanggal {$tgl_lahir}.<br>
                Ulang tahun ke-31 akan jatuh pada {$ulang_tahun}.";
    }
}
