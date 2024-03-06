@extends('layout.app')

@section('title', 'Click | Sell Products')

@include('partials._nav')

@section('content')
    <div class="container">
        <h2 class="text-secondary my-3">New Store Application</h2>
        <small class="text-secondary">Please fill out <span class="text-danger">all</span> form data.</small>
        <form action="{{route('stores.store')}}" method="post" enctype="multipart/form-data" class="mt-3 w-75">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="Store Name">
                <label class="text-secondary" for="name">Store Name</label>
                @error('name')
                    <p class="text-danger mt2">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="location" id="location" class="form-control" placeholder="Store location">
                <label class="text-secondary" for="location">Store Location</label>
                @error('location')
                    <p class="text-danger mt2">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="tag" id="tag" placeholder="Tag">
                <label class="text-secondary mb-2" for="tag">Tag</label>
            </div>
            <div class="form-group mb-3">
                <label class="text-secondary mb-2" for="image">Logo</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <button class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection
