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
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('mahasiswa.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($mahasiswas->isEmpty())
            <div class="well text-center">No Mahasiswas found.</div>
        @else
            @include('mahasiswas.table')
        @endif
        
    </div>
    </div>
    </div>
    </div>
    </div>
    

@endsection