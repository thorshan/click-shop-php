@extends('layout.app')

@section('title', $store->name)

@include('partials._nav')

@section('content')
    <div class="container">
        <h1>Home Page</h1>
        {{-- Alert Box Function --}}
        @if (session('success'))
            <div class="alert alert-secondary alert-dismissible fade show my-3 border-0" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
@endsection
