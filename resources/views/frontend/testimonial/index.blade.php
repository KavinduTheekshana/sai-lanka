@extends('layouts.frontend')
@section('title', "Testimonial Sai Lanka Bliss | Connect, Love & Cherish Every Moment!")
@section('content')
    <div class="main-innerpage w-100 float-start">
        <div class="container">
            <div class="innerpages">
                <h2>Testimonial</h2>
                <span>Home > <span class="font-color-pink">Testimonial</span></span>
            </div>
        </div>
    </div>
    <!-- breadcrumb  end-->




    <!--- third testimonial start -->

    <div class="testimonial-three-wrapper padd-100 float-start w-100" style="background-color: white">
        <div class="container pb-100">
            <div class="heading center-heading">
                <h2>Real <strong>Love Stories</strong>, Real Connections!</h2>
                <div class="heart-line">
                    <i class="fas fa-heart"></i>
                </div>
                <p>Hear from happy couples who found love through Sai Lanka Bliss. Your perfect match could be just a
                    message away!</p>
            </div>
        </div>
        <div class="container">

            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 pb-50">
                        <div class="slider-two-wrapper">
                            <div class="slider-quote">
                                <i class="fas fa-quote-left icon-color"></i>
                            </div>
                            <div class="slider-two-content">
                                <p>{{$testimonial->content}}
                                </p>
                            </div>
                            <div class="slider-author">
                                <img class="testimonial-image-inner" src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : asset('backend/images/bg/default.png') }}" alt="image">
                                <div class="author-name">
                                    <h6>{{$testimonial->name}}</h6>
                                    <span>{{$testimonial->location}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--- third testimonial end -->
@endsection
