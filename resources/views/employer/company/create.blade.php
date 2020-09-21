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

<!-- Start Edit Resume -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="edit_resume_area">
                    <div class="container">
                        <div class="tab-content" id="myTabContent">
                            <div>
                                <div class="create-resume_form">
                                    <div class="form-group">
                                        <label>Company Name *</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Email *</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Mobile No *</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Address *</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>twitter ID </label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook ID </label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Username *</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Retype Password *</label>
                                        <input type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="job_apply">
                                <p><a href="#">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Edit Resume -->
            </div>
        </div>
    </div>
</div>
@endsection
