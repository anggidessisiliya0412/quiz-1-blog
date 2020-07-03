@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar-expand-sm">
        <div class="navbar-nav">
            <a class href="{{ url('/home') }}">Home</a>
            <a class href="{{ url('/category') }}">Category</a>
            <a class href="{{ url('/post') }}">Post</a>
            <a class href="{{ url('/photo') }}">Photos</a>
            <a class href="{{ url('/album') }}">Album</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Selamat Datang!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
