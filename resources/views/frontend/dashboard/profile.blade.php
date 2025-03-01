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
                            <h2>Profile <strong>In</strong>fo</h2>
                            <div class="heart-line">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="alert-section-1  wow fadeInUp">

                            @include('frontend.components.alert')

                            @if (!$profile)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="fas fa-bullhorn bullhorn-color"></i></span>
                                    <span>This profile is currently private. After you complete this form, your profile will
                                        be
                                        public.</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                        </div>
                        <form action="{{ route('profile.store') }}" method="POST">
                            @csrf
                            <div class="input-info-box">
                                <div class="header">
                                    About your Profile
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Profile Name <span class="font-color-pink">*</span></label>
                                                <input type="text" placeholder="Profile Name" name="profile_name"
                                                    value="{{ old('profile_name', $profile->profile_name ?? auth()->user()->name) }}"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Email <span class="font-color-pink">*</span></label>
                                                <input type="text" placeholder="Email" name="email"
                                                    value="{{ old('email', $profile->email ?? auth()->user()->email) }}"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Description <span class="font-color-pink">*</span></label>
                                                <textarea placeholder="Write a little description about you..." name="description">{{ old('description', $profile->description ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Country</label>
                                                <div class="custum-select">
                                                    <select name="country">
                                                        <option value="N/A">Select Country</option>
                                                        <option value="Sri Lanka" {{ (old('country', $profile->country ?? '') == 'Sri Lanka') ? 'selected' : '' }}>Sri Lanka</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>City</label>
                                                <input type="text" name="city" placeholder="City"
                                                    value="{{ old('city', $profile->city ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Birthday</label>
                                                <input type="date" name="birthday" value="{{ old('birthday', $profile->birthday ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Occupation</label>
                                                <input type="text" name="occupation" placeholder="Occupation"
                                                    value="{{ old('occupation', $profile->occupation ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Status</label>
                                                <div class="custum-select">
                                                    <select name="status">
                                                        <option value="Single" {{ (old('status', $profile->status ?? '') == 'Single') ? 'selected' : '' }}>Single</option>
                                                        <option value="In a Relationship" {{ (old('status', $profile->status ?? '') == 'In a Relationship') ? 'selected' : '' }}>In a Relationship</option>
                                                        <option value="Married" {{ (old('status', $profile->status ?? '') == 'Married') ? 'selected' : '' }}>Married</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Birthplace</label>
                                                <input type="text" name="birthplace" placeholder="Birthplace"
                                                    value="{{ old('birthplace', $profile->birthplace ?? '') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-info-box mt-5">
                                <div class="header">
                                    Interests
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Favourite TV Shows</label>
                                                <textarea placeholder="Favourite TV Shows" name="favourite_tv_shows">{{ old('favourite_tv_shows', $profile->favourite_tv_shows ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Favourite Music Bands / Artists</label>
                                                <textarea placeholder="Favourite Music Bands / Artists" name="favourite_music">{{ old('favourite_music', $profile->favourite_music ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Favourite Movies</label>
                                                <textarea placeholder="Favourite Movies" name="favourite_movies">{{ old('favourite_movies', $profile->favourite_movies ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Favourite Games </label>
                                                <textarea placeholder="Favourite Games" name="favourite_games">{{ old('favourite_games', $profile->favourite_games ?? '') }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="input-info-box mt-5">
                                <div class="header">
                                    Jobs &amp; Education
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Title or Place</label>
                                                <input type="text" name="job_title" placeholder="Birthplace"
                                                    value="{{ old('job_title', $profile->job_title ?? '') }}">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Year Started</label>
                                                <input type="text" name="job_year_started" placeholder="Year Started"
                                                    value="{{ old('job_year_started', $profile->job_year_started ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="my-input-box">
                                                <label>Year End</label>
                                                <input type="text" name="job_year_end" placeholder="Year End"
                                                    value="{{ old('job_year_end', $profile->job_year_end ?? '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="my-input-box">
                                                <label>Description</label>
                                                <textarea placeholder="Description" name="job_description">{{ old('job_description', $profile->job_description ?? '') }}</textarea>
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
