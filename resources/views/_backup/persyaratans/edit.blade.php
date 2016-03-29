@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Persyaratan</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($persyaratan, ['route' => ['persyaratan.update', $persyaratan->persyaratan_id], 'method' => 'patch']) !!}

            @include('persyaratans.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection