@extends('layouts.admin')

@section('content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content width flex">
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Start Job Details Area -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-2">
                <div class="view_left">
                    @include('seeker.partials.sidebar')
                </div>
            </div>

            <div class="col-md-9">
                <div class="view_right">
                    <div class="profile_top flex">
                        <div class="profile_top_left">
                            <h6>My Profile</h6>
                        </div>
                        <div class="profile_top_right">
                            <p><a href="{{ url('seeker/profile/download') }}"><i class="fas fa-download"></i> Download CV</a></p>
                        </div>
                    </div>
                    <div class="profile_des">
                        <div class="single_profile_box flex2">
                            <div class="single_profile_box_left">
                                <img src="{{ url('public/storage/'.$user->picture) }}">
                            </div>
                            <div class="single_profile_box_right">
                                <h4>{{ $user->name }}</h4>
                                <p><i class="fas fa-home"></i>{{ $user->address }}</p>
                                <p><i class="far fa-envelope"></i>{{ $user->email }}</p>
                                <p><i class="fas fa-phone"></i>{{ $user->mobile }}</p>
                            </div>
                        </div>
                        <div class="single_profile_box">
                            <h6>OBJECTIVE</h6>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                        </div>
                        <div class="single_profile_box">
                            <h6>WORK EXPERIENCE</h6>
                            <div class="single_child_box">
                                <span class="ex-title">UI/UX Designer</span>
                                <span>BANNANA INC.</span>
                                <span>Fab 2017-Present(5year)</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero, dolores, officia quibusdam architecto sapiente eos voluptas odit ab veniam porro quae possimus itaque, quas! Tempora sequi nobis, atque incidunt!</p>
                            </div>
                        </div>
                        <div class="single_profile_box">
                            <h6>EDUCATION</h6>
                            <div class="single_child_box">
                                <span class="ex-title">{{ $user->degree_institute }}</span>
                                <span>{{ $user->degree_title }}</span>
                                <span>{{ $user->degree_passed_year }}</span>
                                <span>{{ $user->degree_result }} ({{ $user->degree_major }})</span>
                            </div>

                        </div>
                        <div class="single_profile_box">
                            <h6>TRAINING</h6>
                            <div class="single_child_box">
                                <span class="ex-title">Html</span>
                                <p>Pictures, abstract symbols, materials, and colors are among the ingredients with which a</p>
                                <span>Institution - ds ( aS )</span>
                                <span>Duration - 6</span>
                            </div>

                        </div>
                        <div class="single_profile_box">
                            <h6>ACHIEVMENT</h6>
                            <div class="single_child_box">
                                <p>Pictures, abstract symbols, materials, and colors are among the ingredients with which a</p>
                                <span>Duration - 6</span>
                            </div>

                        </div>
                        <div class="single_profile_box">
                            <h6>PERSONAL</h6>
                            <div class="single_child_box">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Fathers Name</th>
                                            <td>{{ $user->father}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Mothers Name</th>
                                            <td>{{ $user->father}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Date of Birth</th>
                                            <td>{{ $user->date_of_birth}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Gender</th>
                                            <td>{{ $user->gender}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Marital Status</th>
                                            <td>{{ $user->marital_status}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Religion</th>
                                            <td>{{ $user->religion}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">NID No</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Job Details Area -->
@endsection
