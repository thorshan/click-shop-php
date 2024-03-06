@extends('layout.app')

@section('title', 'Click | Sign Up')

@include('partials._nav')

@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="my-5">
            <div class="card mt-5 w-50 border-0 shadow-sm px-3 mx-auto">
                <h1 class="card-title text-center my-3">Register</H1>
                <div class="card-body">
                    <form action="{{ route('user.create') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            <label for="name">Name</label>
                            @error('username')
                                <p class="text-danger mt-2">{{ $messge }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <label for="email">Email</label>
                            @error('email')
                                <p class="text-danger mt-2">{{ $messge }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="password">
                            <label for="password">Password</label>
                            @error('password')
                                <p class="text-danger mt-2">{{ $messge }}</p>
                            @enderror
                        </div>
                        <button class="btn btn-dark w-100">Sign Up</button>
                    </form>
                    <div class="">
                        <p>Already user? <a class="text-danger" href="{{ route('login') }}">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
