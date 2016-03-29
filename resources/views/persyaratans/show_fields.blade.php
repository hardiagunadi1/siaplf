<!-- Persyaratan Id Field -->
<div class="form-group">
    {!! Form::label('persyaratan_id', 'Persyaratan Id:') !!}
    <p>{!! $persyaratan->persyaratan_id !!}</p>
</div>

<!-- Id Mahasiswa Field -->
<div class="form-group">
    {!! Form::label('id_mahasiswa', 'Id Mahasiswa:') !!}
    <p>{!! $persyaratan->id_mahasiswa !!}</p>
</div>

<!-- Id Jurusan Field -->
<div class="form-group">
    {!! Form::label('id_jurusan', 'Id Jurusan:') !!}
    <p>{!! $persyaratan->id_jurusan !!}</p>
</div>

<!-- Nama Berkas Field -->
<div class="form-group">
    {!! Form::label('nama_berkas', 'Nama Berkas:') !!}
    <p>{!! $persyaratan->nama_berkas !!}</p>
</div>

<!-- Ketersediaan Field -->
<div class="form-group">
    {!! Form::label('ketersediaan', 'Ketersediaan:') !!}
    <p>{!! $persyaratan->ketersediaan !!}</p>
</div>

