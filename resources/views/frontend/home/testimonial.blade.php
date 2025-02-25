<div class="main-customers-slider w-100 float-start">
    <div class="container">
        <div class="heading center-heading">
            <h2>Real <strong>Love Stories</strong>, Real Connections!</h2>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <p>Hear from happy couples who found love through Sai Lanka Bliss. Your perfect match could be just a message away!</p>
        </div>
        <div class="customers-slider w-100 float-start">
            <div class="owl-carousel owl-theme">
                @foreach ($testimonials as $testimonial)
                <div class="item">
                    <div class="slider-box">
                        <div class="slider-text">
                            <div class="quote-icon">
                                <img src="{{ asset('frontend/images/quote.png') }}" alt="quote" class="img-fluid">
                            </div>
                            <div class="slider-heading">
                                <h4>{{$testimonial->name}}</h4>
                                <a href="javascript:;">( {{$testimonial->location}} )</a>
                            </div>
                            <p>{{$testimonial->content}}</p>
                        </div>
                        <div class="slider-img zoomIn">
                            <img src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : asset('backend/images/bg/default.png') }}" alt="slider-img" class="img-fluid testimonail-image">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>