@extends('layout.app')

@section('title', 'Click | All Stores')

@include('partials._nav')

@section('content')
    <div class="container">
        <h1 class="my-3">All Stores</h1>
        {{-- Alert Box Function --}}
        @if (session('success'))
            <div class="alert alert-secondary alert-dismissible fade show my-3 border-0" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            @foreach ($stores as $store)
                <div class="col-3 g-3">
                    <div class="card border-0 shadow-sm p-3">
                        <img src="{{ asset($store->image ?? 'logo/click-logo.png') }}" class="image-fluid p-5">
                        <h4 class="card-title text-white text-center bg-dark rounded p-2">{{ $store->name }}</h4>
                        <a class="btn btn-danger" href="{{ route('show-store', $store->id) }}">View Store</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
