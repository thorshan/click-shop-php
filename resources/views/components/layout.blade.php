@extends('layout.app')

@section('content')
        @include('partials._adminNav')
        <div class="row" style="height:100vh;">
            <div class="g-0" style="width:20%;">
                @include('partials._sideNav')
            </div>
            <div class="g-0 px-5 py-3" style="width:80%">
                {{ $slot }}
            </div>
        </div>
@endsection
