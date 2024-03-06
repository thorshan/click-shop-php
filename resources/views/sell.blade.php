@extends('layout.app')

@section('title', 'Click | Sell Application Page')

@include('partials._nav')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Sell Your <span class="text-danger fw-bold">Product</span> On Our <span
                class="text-danger fw-bold">Platform</span></h1>
        <div class="card border-0">
            <div class="card-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum vitae reprehenderit nam nisi est, odit
                corporis cum repellendus veritatis molestiae nesciunt quam, reiciendis libero sequi magnam unde. Ipsam nisi
                illum eos impedit! Numquam sit ipsum dicta vero odio, temporibus et culpa cum nisi eaque incidunt
                accusantium inventore vel accusamus tempora quasi ut, rerum quidem quae dignissimos voluptatum!
            </div>
            <div class="my-5 row justify-content-center">
                <a class="btn btn-danger w-50" href="{{route('sell.apply')}}">Apply Now</a>
            </div>
            <div class="">
                <h3 class="text-danger text-center my-3 fw-bold">Our Partners</h3>
                <hr>
                <div class="row">
                    <div class="col-3 g-3">
                        <img src="{{ asset('logo/click-logo.png') }}" width="200" alt="">
                    </div>
                    <div class="col-3 g-3">
                        <img src="{{ asset('logo/click-logo.png') }}" width="200" alt="">
                    </div>
                    <div class="col-3 g-3">
                        <img src="{{ asset('logo/click-logo.png') }}" width="200" alt="">
                    </div>
                    <div class="col-3 g-3">
                        <img src="{{ asset('logo/click-logo.png') }}" width="200" alt="">
                    </div>
                    <div class="col-3 g-3">
                        <img src="{{ asset('logo/click-logo.png') }}" width="200" alt="">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('logo/click-logo.png') }}" width="200" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
