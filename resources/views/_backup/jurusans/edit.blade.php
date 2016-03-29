@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Jurusan</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($jurusan, ['route' => ['jurusan.update', $jurusan->jurusan_id], 'method' => 'patch']) !!}

            @include('jurusans.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection