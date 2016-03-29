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
                   <div class="note note-success">
                     @include('flash::message')
             </div>
        <a class="btn btn-primary" style="margin-top: 25px" href="{!! route('mahasiswa.create') !!}">Add New</a>

        

        @if($mahasiswas->isEmpty())
            <div class="note note-information">No Mahasiswas found.</div>
        @else
            @include('mahasiswas.table2')
        @endif
        
    </div>
    </div>
    

@endsection