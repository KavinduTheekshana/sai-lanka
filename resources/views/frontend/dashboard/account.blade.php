@extends('layouts.frontend')

@section('content')
    @include('frontend.components.dashboard-inner')

    <div class="blog-page pt-5 pb-5 w-100 float-start">
        <div class="container">
            <div class="row">
                @include('frontend.components.dashboard-sidebar')

                <div class="col-lg-8 col-md-12 col-12">
                    <div class="my-profile">
                        <div class="heading">
                            <h2>Account <strong>In</strong>fo</h2>
                            <div class="heart-line">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="input-info-box">
                            <div class="header">
                                Personal Info
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-input-box">
                                            <label>Profile Name</label>
                                            <input type="text" placeholder="Profile Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-input-box">
                                            <label>Public Email</label>
                                            <input type="text" placeholder="Public Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons  mt-4">
                            <button type="submit" class="main-btn">Save Changes</button>
                        </div>

<hr>

                        <div class="input-info-box mt-4">
                            <div class="header">
                                Change Password
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="my-input-box">
                                            <label>Confirm your Current Password</label>
                                            <input type="password" placeholder="Enter   Current Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-input-box">
                                            <label>New Password</label>
                                            <input type="password" placeholder="Enter   New Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-input-box">
                                            <label>Confirm New Password</label>
                                            <input type="password" placeholder="Enter Confirm  Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#">
                                            Forgot your Password ?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons  mt-4">
                            <button type="submit" class="main-btn">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
