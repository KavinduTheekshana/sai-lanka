@extends('layouts.frontend')
@section('title', 'Account | Sai Lanka Bliss')
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

                        @include('frontend.components.alert')


                        <form action="{{ route('update.name') }}" method="POST">
                            @csrf
                            <div class="input-info-box">
                                <div class="header">
                                    Personal Info
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Name</label>
                                                <input type="text" placeholder="Name" name="name"
                                                    value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Email</label>
                                                <input type="text" placeholder="Email"
                                                    value="{{ auth()->user()->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons  mt-4">
                                <button type="submit" class="main-btn">Save Changes</button>
                            </div>
                        </form>
                        <hr>

                        <form action="{{ route('update.password') }}" method="POST">
                            @csrf
                            <div class="input-info-box mt-4">
                                <div class="header">
                                    Change Password
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Confirm your Current Password</label>
                                                <input type="password" name="current_password"
                                                    placeholder="Enter Current Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>New Password</label>
                                                <input type="password" name="new_password" placeholder="Enter New Password"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Confirm New Password</label>
                                                <input type="password" name="new_password_confirmation"
                                                    placeholder="Enter Confirm Password" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="buttons  mt-4">
                                <button type="submit" class="main-btn">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
