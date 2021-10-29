@if (isset($siswa))
    {!! Form::hidden('id', $siswa->id) !!}
@endif
@if ($errors->any())
    <div class="form-group {{ $errors->has('nisn') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('nisn', 'NISN:', ['class' => 'control-label']) !!}
    {!! Form::text('nisn', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nisn'))
        <span class="alert-danger">{{ $errors->first('nisn') }}</span>
    @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_siswa') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_siswa', 'Nama:', ['class' => 'control-label']) !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_siswa'))
        <span class="alert-danger">{{ $errors->first('nama_siswa') }}</span>
    @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('tanggal_lahir') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label']) !!}
    {!! Form::date('tanggal_lahir', !empty($siswa) ?
            $siswa->tanggal_lahir->format('Y-m-d'): null, ['class' => 'form-control']) !!}
        @if ($errors->has('tanggal_lahir'))
            <span class="alert-danger">{{ $errors->first('tanggal_lahir') }}</span>
        @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('id_kelas') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('id_kelas', 'Kelas:', ['class' => 'control-label']) !!}
    @if (count($list_kelas) > 0)
    {!! Form::select('id_kelas', $list_kelas, null, ['class' => 'form-control',
    'id' => 'id_kelas','placeholder' => 'Pilih Kelas']) !!}
    @else
        <p>Tidak ada pilihan kelas, buat dulu coy...!</p>
    @endif
    @if ($errors->has('id_kelas'))
        <span class="alert-danger">{{ $errors->first('id_kelas') }}</span>
    @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('jenis_kelamin') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
    <div class="radio">
        <label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-laki</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan</label>
    </div>
    @if ($errors->has('jenis_kelamin'))
        <br>
        <span class="alert-danger">{{ $errors->first('jenis_kelamin') }}</span>
    @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('nomor_telepon') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('nomor_telepon', 'Telepon:', ['class' => 'control-label']) !!}
    {!! Form::text('nomor_telepon', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nomor_telepon'))
        <br>
        <span class="alert-danger">{{ $errors->first('nomor_telepon') }}</span>
    @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('hobi_siswa') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('hobi_siswa', 'Hobi:', ['class' => 'control-label']) !!}
    @if (count($list_hobi) > 0)
        @foreach ($list_hobi as $key => $value)
            <div class="checkbox">
                <label>{{ Form::checkbox('hobi_siswa[]',$key, null) }}
                {{ $value }}</label>
            </div>
        @endforeach
    
    @else
        <p>Tidak ada pilihan hobi, buat dulu coy...!</p>
    @endif
    </div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('foto') ?
       'invalid-feedback' : 'valid-feedback' }}"></div>
@else
    <div class="form-group">
@endif
    {!! Form::label('foto', 'Foto:') !!}
    <br>
    {!! Form::file('foto') !!}
    @if ($errors->has('foto'))
        <br>
        <span class="alert-danger">{{ $errors->first('foto') }}</span>
    @endif

    {{-- Menampilkan FOTO --}}
    @if (isset($siswa))
        @if (isset($siswa->foto))
            <img src="{{ asset('fotoupload/'.$siswa->foto) }}">
        @else
            @if ($siswa->jenis_kelamin == 'L')
                <img src="{{ asset('fotoupload/dummymale.jpg') }}">
            @else
                <img src="{{ asset('fotoupload/dummyfemale.jpg') }}">
            @endif
        @endif
    @endif
    </div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>