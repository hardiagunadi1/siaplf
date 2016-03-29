<div class="form-body">

<!-- Nama Jurusan Field -->
<div class="form-group">
    {!! Form::label('nama_jurusan', 'Nama Jurusan:', ['class' => 'col-md-3 control-label']) !!}
    	<div class="col-md-9">
    		{!! Form::text('nama_jurusan', null, ['class' => 'form-control']) !!}
    	</div>
</div>

<!-- Tahun Ajaran Field -->
<div class="form-group">
    {!! Form::label('tahun_ajaran', 'Tahun Ajaran:', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
    {!! Form::text('tahun_ajaran', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
<!-- Submit Field -->
<div class="form-actions">
	<div class="row">
		<div class="col-md-offset-3 col-md-9">									
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jurusan.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>
</div>

