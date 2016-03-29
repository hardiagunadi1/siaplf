<!-- Jurusan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jurusan_id', 'Jurusan Id:') !!}
    {!! Form::number('jurusan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Jurusan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_jurusan', 'Nama Jurusan:') !!}
    {!! Form::text('nama_jurusan', null, ['class' => 'form-control']) !!}
</div>

<!-- Tahun Ajaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun_ajaran', 'Tahun Ajaran:') !!}
    {!! Form::text('tahun_ajaran', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jurusan.index') !!}" class="btn btn-default">Cancel</a>
</div>
