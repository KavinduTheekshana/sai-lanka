@extends('layouts.frontend')

@section('content')
    <a href="javascript:;" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
    @include('frontend.components.header')


    @include('frontend.home.slider')
    @include('frontend.home.howItWorks')
    @include('frontend.home.testimonial')
    @include('frontend.home.members')
    @include('frontend.home.cta')










        @include('frontend.components.footer')

@endsection
