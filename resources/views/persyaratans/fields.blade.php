<!-- Persyaratan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persyaratan_id', 'Persyaratan Id:') !!}
    {!! Form::number('persyaratan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_mahasiswa', 'Id Mahasiswa:') !!}
    {!! Form::number('id_mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Jurusan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jurusan', 'Id Jurusan:') !!}
    {!! Form::number('id_jurusan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Berkas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_berkas', 'Nama Berkas:') !!}
    {!! Form::text('nama_berkas', null, ['class' => 'form-control']) !!}
</div>

<!-- Ketersediaan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ketersediaan', 'Ketersediaan:') !!}
    {!! Form::number('ketersediaan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('persyaratan.index') !!}" class="btn btn-default">Cancel</a>
</div>
