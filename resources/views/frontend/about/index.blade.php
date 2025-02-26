@extends('layouts.frontend')

@section('content')

<div class="main-innerpage w-100 float-start">
    <div class="container">
        <div class="innerpages">
            <h2>About Us</h2>
            <span>Home > <span class="font-color-pink">About Us</span></span>
        </div>
    </div>
</div>


@include('frontend.about.vision')
@include('frontend.about.features')
@include('frontend.home.cta')


@endsection
