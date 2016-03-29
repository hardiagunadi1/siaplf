@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Jurusans</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('jurusan.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($jurusans->isEmpty())
            <div class="well text-center">No Jurusans found.</div>
        @else
            @include('jurusans.table')
        @endif
        
    </div>
@endsection