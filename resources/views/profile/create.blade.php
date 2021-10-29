@extends('template')

@section('main')
    <div id="profile">
        <h2>Tambah Mahasiswa</h2>

        {!! Form::open(['url' => 'profile']) !!}
        @include('profile.form', ['submitButtonText' => 'Simpan'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop