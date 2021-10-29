@extends('template')

@section('main')
    <div id="profile">
        <h2>Detail Mahasiswa</h2>

        <table class="table table-striped">
            <tr>
                <th>NIM</th>
                <td>{{$mahasiswa->nim}}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{$mahasiswa->nama_mhs}}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{$mahasiswa->alamat}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{$mahasiswa->jenis_kelamin}}</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td>{{$mahasiswa->prodi}}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{$mahasiswa->jurusan}}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{$mahasiswa->kelas}}</td>
            </tr>
            <tr>
                <th>Angkatan</th>
                <td>{{$mahasiswa->angkatan}}</td>
            </tr>
        </table>
    </div>
@endsection

@section('footer')
    @include('footer')
@stop