@extends('template')

@section('main')
    <div id="profile">
        <!-- Tag body ini gunanya untuk mengisikan semua konten yang ada di dalam web-->
        
            <center>
                <div class="modal-content">

                    <div class="modal-body">
                        <center>
                            <img src="img/foto.jpg" name="aboutme" width="140" height="140" border="0" class="img-thumbnail rounded-pill"></a>
                            <h3 class="media-heading">Rizqan Mubarak Rahman <small class="badge badge-danger">INA</small></h3>
                            <span><strong>Skills: </strong></span>
                            <span class="badge badge-warning">HTML5/CSS</span>
                            <span class="badge badge-info">Adobe XD</span>
                            <span class="badge badge-info">PHP 7</span>
                            <span class="badge badge-success">Java</span>
                        </center>
                        <hr>
                        <center>
                            <p class="text-left"><strong>About Me: </strong><br>
                                Hi, I'm Rizqan Mubarak Rahman, I have huge passion for web-development and mobile programming. I love to learn abd thrive from challanges.</p>
                            <br>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <!--
                            <center>
                                <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                            </center>
                            -->
                    </div>
                    
                </div>
            </center>
            <br>
            <h2>Mahasiswa</h2>

            @if (!empty($mahasiswa_list))
                <table class="table">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Prodi</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa_list as $mahasiswa)
                            <tr>
                                <td>{{$mahasiswa->nim}}</td>
                                <td>{{$mahasiswa->nama_mhs}}</td>
                                <td>{{$mahasiswa->alamat}}</td>
                                <td>{{$mahasiswa->jenis_kelamin}}</td>
                                <td>{{$mahasiswa->prodi}}</td>
                                <td>{{$mahasiswa->jurusan}}</td>
                                <td>{{$mahasiswa->kelas}}</td>
                                <td>{{$mahasiswa->angkatan}}</td>
                                <td>
                                    <div class="box-button">
                                        <a href="profile/{{$mahasiswa->id}}" class="btn btn-success btn-sm">Detail</a>
                                    </div>
                                    <div class="box-button">
                                        <a href="profile/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    </div>
                                    <div class="box-button">
                                        {!! Form::open(['method' => 'DELETE', 'action' =>
                                        ['ProfileController@destroy', $mahasiswa->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Tidak ada data siswa.</p>
            @endif
            <div class="table-nav">
                <div class="jumlah-data">
                    <strong> Jumlah Mahasiswa: {{$jumlah_mahasiswa}}</strong>
                </div> 
                <div class="float-right">
                    {{$mahasiswa_list->links()}}
                </div>
            </div>
            <div class="tombol-nav">
                <a href="profile/create" class="btn btn-primary">
                Tambah Mahasiswa</a>
            </div>
        
    </div>
@stop

