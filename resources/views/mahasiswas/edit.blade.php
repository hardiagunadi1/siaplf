	@extends('layouts.app2')

	@section('htmlheader_title')
		Daftar Baru
	@endsection

	@section('content_title')
		Daftar Baru
	@endsection

	@section('content_title_small')
		Mahasiswa
	@endsection

	@section('contentheader_title')
	Form Pendaftaran Mahasiswa
	@endsection



@section('main-content')
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN VALIDATION STATES-->
			<div class="portlet light portlet-fit portlet-form bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-settings font-red"></i>
						<span class="caption-subject font-red sbold uppercase">Basic Validation</span>
					</div>
				<div class="actions">
					<!-- action here -->
					</div>
				</div>
				<div class="portlet-body">									
					@include('core-templates::common.errors')
				<div class="row">
					 <!-- {!! Form::model($mahasiswa, ['class' => 'form-horizontal'], ['route' => ['mahasiswa.update', $mahasiswa->mahasiswa_id], 'method' => 'post']) !!} -->
					 {!! Form::model($mahasiswa, [
					 	'method' => 'PATCH',
					 	'class' => 'form-horizontal',
					 	'route' => ['mahasiswa.update', $mahasiswa->mahasiswa_id]

					 ]) !!}

						@include('mahasiswas.fields')
						
					{!! Form::close() !!}									
				</div>
				</div>
				<!-- END VALIDATION STATES-->
			</div>
	</div>
@endsection