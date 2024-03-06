@extends('layout.app')

@section('title', 'Click | Login')

@include('partials._nav')

@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="my-5">
            <div class="card w-50 border-0 shadow-sm px-3 m-auto">
                <h1 class="card-title text-center my-3">Login</H1>
                <div class="card-body">
                    <form action="{{route('authenticate')}}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <label for="email">Email</label>
                            @error('email')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="password">
                            <label for="password">Password</label>
                            @error('password')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn btn-dark w-100">Login</button>
                    </form>
                    <div class="">
                        <p>Create account? <a class="text-danger" href="{{ route('register') }}">register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
