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
                   
                     @include('flash::message')
             </div>
        <a class="btn btn-primary" style="margin-top: 25px" href="{!! route('jurusan.create') !!}">Add New</a>

        

        @if($jurusans->isEmpty())
            <div class="note note-information">No Jurusan found.</div>
        @else
            @include('jurusans.table')
        @endif
        
    </div>
    </div>
    

@endsection