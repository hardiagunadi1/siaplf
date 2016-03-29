@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Persyaratans</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('persyaratan.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($persyaratans->isEmpty())
            <div class="well text-center">No Persyaratans found.</div>
        @else
            @include('persyaratans.table')
        @endif
        
    </div>
@endsection