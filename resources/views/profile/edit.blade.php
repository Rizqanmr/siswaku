@extends('template')

@section('main')
    <div id="profile">
        <h2>Edit Mahasiswa</h2>

        {!! Form::model($mahasiswa, ['method' => 'PATCH', 
        'action' => ['ProfileController@update', $mahasiswa->id]]) !!}
        @include('profile.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection