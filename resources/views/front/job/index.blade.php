@extends('layouts.master')

@section('main-content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content">
            <div class="banner_search">
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="email" placeholder="location">
                        </div>
                        <div class="form-group">
                            <select>
                                <option selected>Choose a category</option>
                                <option>development</option>
                            </select>
                        </div>
                        <div class="button_search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Start JobList In Jobs Page -->
<div class="joblist_area">
    <div class="container">
        <div class="joblist">
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
                    <div class="job_title">
                        <h5>web designer</h5>
                        <p>shopify</p>
                    </div>
                </div>
                <div class="job_location">
                    <i class="fas fa-map-marker"></i>
                    <p>New York, New York</p>
                </div>
                <div class="job_type">
                    <p class="part_time">part time</p>
                </div>
                <div class="job_apply">
                    <p><a href="/jobs/job-details">apply</a></p>
                </div>
            </div>
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
                    <div class="job_title">
                        <h5>web designer</h5>
                        <p>shopify</p>
                    </div>
                </div>
                <div class="job_location">
                    <i class="fas fa-map-marker"></i>
                    <p>New York, New York</p>
                </div>
                <div class="job_type">
                    <p class="full_time">full time</p>
                </div>
                <div class="job_apply">
                    <p><a href="/jobs/job-details">apply</a></p>
                </div>
            </div>
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
                    <div class="job_title">
                        <h5>web designer</h5>
                        <p>shopify</p>
                    </div>
                </div>
                <div class="job_location">
                    <i class="fas fa-map-marker"></i>
                    <p>New York, New York</p>
                </div>
                <div class="job_type">
                    <p class="full_time">full time</p>
                </div>
                <div class="job_apply">
                    <p><a href="/jobs/job-details">apply</a></p>
                </div>
            </div>
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
                    <div class="job_title">
                        <h5>web designer</h5>
                        <p>shopify</p>
                    </div>
                </div>
                <div class="job_location">
                    <i class="fas fa-map-marker"></i>
                    <p>New York, New York</p>
                </div>
                <div class="job_type">
                    <p class="part_time">part time</p>
                </div>
                <div class="job_apply">
                    <p><a href="/jobs/job-details">apply</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End JobList In Home Page -->
@endsection
