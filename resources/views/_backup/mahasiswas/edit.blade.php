@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Mahasiswa</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($mahasiswa, ['route' => ['mahasiswa.update', $mahasiswa->mahasiswa_id], 'method' => 'patch']) !!}

            @include('mahasiswas.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection