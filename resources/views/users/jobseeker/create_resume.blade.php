@extends('layouts.master')

@section('main-content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="banner_content">
            <h2>Post A Job</h2>
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Job Post Form -->
<div class="job_post_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="job_post_form">
                    <div class="single_create_resume">
                        <h5>NO PROFILE YET? CREATE A NEW ONE :</h5>
                        <div class="create-resume_form">
                            <div class="form-group">
                                <label>Full Name *</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Father Name *</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Mother Name *</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Date of Birth *</label>
                                <input type="date">
                            </div>
                            <div class="form-group">
                                <label>Gender *</label>
                                <select>
                                    <option>Female</option>
                                    <option>Male</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>
                                    Separated Religion *</label>
                                <select>
                                    <option>islam</option>
                                    <option>himduism</option>
                                    <option>buddhi</option>
                                    <option>christian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Marital Status *</label>
                                <select>
                                    <option>married</option>
                                    <option>unmarried</option>
                                    <option>widowed</option>
                                    <option>single</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Mobile No *</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>District *</label>
                                <select>
                                    <option>sylhet</option>
                                    <option>dhaka</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Present Address *</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="single_create_resume">
                        <h5>EDUCATION INFORMATION</h5>
                        <div class="create-resume_form">
                            <div class="form-group">
                                <label>Degree Name *</label>
                                <select>
                                    <option>hsc</option>
                                    <option>ssc</option>
                                    <option>bechelor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Degree Title *</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Major *</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Institution Name *</label>
                                <input type="date">
                            </div>
                            <div class="form-group">
                                <label>Course Type *</label>
                                <select>
                                    <option>ongoing</option>
                                    <option>complete</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Result</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Year Passed</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="single_create_resume">
                        <h5>PROFESSIONAL INFORMATION</h5>
                        <div class="create-resume_form">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Job Start *</label>
                                <input type="date">
                            </div>
                            <div class="form-group">
                                <label>Job Status</label>
                                <select>
                                    <option>status</option>
                                    <option>still continuing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Job End *</label>
                                <input type="date">
                            </div>
                        </div>
                    </div>
                    <div class="single_create_resume">
                        <h5>LOGIN INFORMATION</h5>
                        <div class="create-resume_form">
                            <div class="form-group">
                                <label>User Name *</label>
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
                            <div class="form-group">
                                <label>Profile Image *</label>
                                <input type="file" placeholder="choose image">
                            </div>
                        </div>
                    </div>
                    <div class="job_apply">
                        <p><a href="#">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
