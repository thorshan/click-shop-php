@extends('layout.app')

@section('title', 'Click | ' . $store->name)

@include('partials._nav')

@section('content')
    <div class="container">
        <h3 class="my-3">{{ $store->name }}</h3>
    </div>
@endsection
