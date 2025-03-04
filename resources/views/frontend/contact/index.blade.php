@extends('layouts.frontend')
@section('title', "Contact Sai Lanka Bliss | Connect, Love & Cherish Every Moment!")
@section('content')
    <div class="main-innerpage w-100 float-start">
        <div class="container">
            <div class="innerpages">
                <h2>Contact</h2>
                <span>Home > <span class="font-color-pink">Contact</span></span>
            </div>
        </div>
    </div>
    <div class="contact-section w-100 float-start">
        <div class="container">
            <div class="heading center-heading">
                <h2>Get <strong>In</strong> Touch</h2>
                <div class="heart-line">
                    <i class="fas fa-heart"></i>
                </div>
                <p>Have questions or need assistance? We’re here to help! Reach out to us through the form below, and our
                    team will get back to you as soon as possible. You can also contact us via email or phone for quick
                    support. Stay connected with us on social media for updates and announcements.</p>
            </div>
            <div class="w-100 float-start position-relative">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="contact-detail">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="contact-detail-box mh-400">
                                        {{-- <h4>Contact Details</h4> --}}
                                        {{-- <div class="contact-detail-list">
                                            <div class="contact-detail-text">
                                                <p>Head Office:</p>
                                                <p>9 Valley St. Brooklyn, NY 11203</p>
                                            </div>
                                            <div class="contact-detail-text">
                                                <p>Branch Office:</p>
                                                <p>Webstrot Company, 5 Lala laj path rai marg
                                                    Dewas, M.P. India 455001</p>
                                            </div>
                                            <div class="contact-detail-text">
                                                <p>Phone:</p>
                                                <p>+1-804-548-5214 <br>
                                                    +1-804-548-5215</p>
                                            </div>
                                            <div class="contact-detail-text">
                                                <p>Email:</p>
                                                <p>
                                                    <a href="javascript:;">example@stepup.com</a> <br>
                                                    <a href="javascript:;">support@example.com</a>
                                                </p>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12"></div>
                    <div class="col-lg-9 col-md-12 col-12">
                        <div class="form-box">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-12"></div>
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="main-form">
                                        <h4>For any Query Please Leave A Messege</h4>
                                        <form>
                                            <div class="form-input">
                                                <input type="text" id="validationCustom01" placeholder="Full Name *"
                                                    required>
                                                <label for="validationCustom01"><i class="fas fa-user"></i></label>
                                            </div>
                                            <div class="form-input">
                                                <input type="email" id="validationCustom02" placeholder="Email Address *"
                                                    required>
                                                <label for="validationCustom02"><i class="fas fa-envelope"></i></label>
                                            </div>
                                            <div class="form-input">
                                                <input type="text" id="validationCustom03" placeholder="Subject"
                                                    required>
                                                <label for="validationCustom03"><i class="fas fa-share"></i></label>
                                            </div>
                                            <div class="form-input">
                                                <input type="tel" id="validationCustom04" placeholder="Phone" required>
                                                <label for="validationCustom04"><i class="fas fa-share"></i></label>
                                            </div>
                                            <div class="form-input">
                                                <textarea id="validationTextarea" placeholder="Message" required></textarea>
                                                <label for="validationTextarea"><i class="fas fa-share"></i></label>
                                            </div>
                                            <div class="form-input">
                                                <button class="main-btn" type="submit">Send Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
