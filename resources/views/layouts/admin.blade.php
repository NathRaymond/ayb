@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row row-cols-3 justify-content-center">
        <div class="col-md-2">
            @include("layouts.components.side_nav")
        </div>
        <div class="col-md-8">
            @yield('rightMainContent')
        </div>
    </div>
</div>

@endsection