@extends('layouts.master')

@section('main-content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content width flex">
        </div>
    </div>
</div>
<!-- End Header Banner Area -->

<!-- Start POST JOB -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-2">
                <div class="view_left">
                    @include('users.employer.partials.sidebar')
                </div>
            </div>
            <div class="col-md-10">
                <div class="edit_resume_area">
                    <div class="container">
                        <div class="form">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" placeholder="write job title">
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" placeholder="write company name">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" placeholder="write Location ">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select>
                                    <option>all category</option>
                                    <option>food</option>
                                    <option>science</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Job Tags (optional)</label>
                                <input type="text" placeholder="write Job tags">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Closing Date (optional)</label>
                                <input type="text" placeholder="yyyy-mm-dd">
                            </div>
                            <h5>Company Details
                            </h5>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" placeholder="company Name">
                            </div>
                            <div class="form-group">
                                <label>Website (optional)</label>
                                <input type="text" placeholder="Website (optional)">
                            </div>
                            <div class="form-group">
                                <label>Company Logo</label>
                                <input type="file" placeholder="choose image">
                            </div>
                            <div class="job_apply">
                                <p><a href="">apply</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Edit Resume -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
