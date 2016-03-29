<div class="form-body">
	<!-- Mahasiswa Id Field -->
	<div class="form-group">
		{!! Form::label('mahasiswa_id', 'Nomor Pendaftaran:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
			{!! Form::number('mahasiswa_id', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Jurusan Id Field -->
	<div class="form-group">
		{!! Form::label('jurusan_id', 'Jurusan:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
			{!! Form::text('jurusan_id', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Nama Mahasiswa Field -->
	<div class="form-group">
		{!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
			{!! Form::text('nama_mahasiswa', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Tmp Lahir Field -->
	<div class="form-group">
		{!! Form::label('tmp_lahir', 'Tmp Lahir:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-4">
			{!! Form::text('tmp_lahir', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-md-3">
		{!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Jenkel Field -->
	<div class="form-group">
		<label class="col-md-3 control-label">Jenis Kelamin</label>
			<div class="col-md-9">
				<div class="radio-list">
					<label class="radio-inline">
						{!! Form::radio('jenkel', 'Laki-laki', true) !!} Laki-laki</label>
					<label class="radio-inline">
						{!! Form::radio('jenkel', 'Perempuan') !!} Perempuan</label>
				</div>
			</div>
	</div>

	<!-- Agama Field -->
	<div class="form-group">
		<label class="col-md-3 control-label">Agama</label>
			<div class="col-md-9">
				<div class="radio-list">
					<label class="radio-inline">
						{!! Form::radio('agama', 'Islam', true) !!} Islam</label>
					<label class="radio-inline">
						{!! Form::radio('agama', 'Kristen') !!} Kristen</label>
					<label class="radio-inline">
						{!! Form::radio('agama', 'Budha') !!} Budha</label>
					<label class="radio-inline">
						{!! Form::radio('agama', 'Hindu') !!} Hindu</label>
					<label class="radio-inline">
						{!! Form::radio('agama', 'Konghuchu') !!} Konghuchu</label>
				</div>
			</div>
	</div>

	<!-- Ukuranjas Field -->
	
	<div class="form-group">
		<label class="col-md-3 control-label">Ukuran Jas</label>
			<div class="col-md-9">
				<div class="radio-list">
					<label class="radio-inline">
						{!! Form::radio('ukuranjas', 'M', true) !!} M</label>
					<label class="radio-inline">
						{!! Form::radio('ukuranjas', 'L') !!} L</label>
					<label class="radio-inline">
						{!! Form::radio('ukuranjas', 'XL') !!} XL</label>
				</div>
			</div>
	</div>

	<!-- S Kerja Field -->
	<div class="form-group">
		<label class="col-md-3 control-label">Status Kerja</label>
			<div class="col-md-9">
				<div class="radio-list">
					<label class="radio-inline">
						{!! Form::radio('s_kerja', 'Belum Kerja', true) !!} Belum Kerja</label>
					<label class="radio-inline">
						{!! Form::radio('s_kerja', 'Sudah Kerja') !!} Sudah Kerja</label>
					
				</div>
			</div>
	</div>

	<!-- S Nikah Field -->
	<div class="form-group">
		<label class="col-md-3 control-label">Status Pernikahan</label>
			<div class="col-md-9">
				<div class="radio-list">
					<label class="radio-inline">
						{!! Form::radio('s_nikah', 'Belum Nikah', true) !!} Belum Nikah</label>
					<label class="radio-inline">
						{!! Form::radio('s_nikah', 'Nikah') !!} Nikah</label>
					<label class="radio-inline">
						{!! Form::radio('s_nikah', 'Pernah Nikah') !!} Pernah Nikah</label>
				</div>
			</div>
	</div>		

	<!-- Alamat Field -->
	<div class="form-group">
		{!! Form::label('alamat', 'Alamat:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
		{!! Form::text('alamat', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- No Hp Field -->
	<div class="form-group">
		{!! Form::label('no_hp', 'No Hp:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
		{!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Nama Ortu Field -->
	<div class="form-group">
		{!! Form::label('nama_ortu', 'Nama Ortu:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
		{!! Form::text('nama_ortu', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Nama Suis Field -->
	<div class="form-group">
		{!! Form::label('nama_suis', 'Nama Suis:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
		{!! Form::text('nama_suis', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Pendidikan Terakhir Field -->
	<div class="form-group">
		{!! Form::label('pendidikan_terakhir', 'Pendidikan Terakhir:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
		{!! Form::text('pendidikan_terakhir', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Alamat Skolah Field -->
	<div class="form-group">
		{!! Form::label('alamat_skolah', 'Alamat Skolah:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
		{!! Form::text('alamat_skolah', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<!-- Persyaratan Id Field -->
	<div class="form-group">
		{!! Form::label('persyaratan_id', 'Persyaratan Id:', ['class' => 'col-md-3 control-label']) !!}
		<div class="col-md-9">
		{!! Form::text('persyaratan_id', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>

<!-- Submit Field -->
<div class="form-actions">
	<div class="row">
		<div class="col-md-offset-3 col-md-9">									
			{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
			<a href="{!! route('mahasiswa.index') !!}" class="btn btn-default">Cancel</a>
		</div>
	</div>
</div>
	
