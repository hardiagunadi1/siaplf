@extends('layouts.app')

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
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"></div>

					<div class="panel-body">

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'mahasiswa.store']) !!}

            @include('mahasiswas.fields')

        {!! Form::close() !!}


					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
