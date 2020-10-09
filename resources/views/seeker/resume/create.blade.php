@extends('layouts.admin')

@section('content')
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
                    <form action="{{ url('seeker/resume/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="single_create_resume">
                            <h5>NO PROFILE YET? CREATE A NEW ONE :</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input type="text" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Father Name *</label>
                                    <input type="text" name="father" required>
                                </div>
                                <div class="form-group">
                                    <label>Mother Name *</label>
                                    <input type="text" name="mother" required>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth *</label>
                                    <input type="date" name="date_of_birth" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender *</label>
                                    <select name="gender" required>
                                        <option>Female</option>
                                        <option>Male</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Separated Religion *</label>
                                    <select name="religion" required>
                                        <option>islam</option>
                                        <option>himduism</option>
                                        <option>buddhi</option>
                                        <option>christian</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Marital Status *</label>
                                    <select name="marital_status" required>
                                        <option>married</option>
                                        <option>unmarried</option>
                                        <option>widowed</option>
                                        <option>single</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" name="email">
                                </div> --}}
                                <div class="form-group">
                                    <label>Mobile No *</label>
                                    <input type="text" name="mobile" required>
                                </div>
                                <div class="form-group">
                                    <label>District *</label>
                                    <select name="district" required>
                                        <option>sylhet</option>
                                        <option>dhaka</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Present Address *</label>
                                    <input type="text" name="address" required>
                                </div>
                            </div>
                        </div>
                        <div class="single_create_resume">
                            <h5>EDUCATION INFORMATION</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Degree Name *</label>
                                    <select name="degree_name" required>
                                        <option>hsc</option>
                                        <option>ssc</option>
                                        <option>bechelor</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Degree Title *</label>
                                    <input type="text" name="degree_title" required>
                                </div>
                                <div class="form-group">
                                    <label>Major *</label>
                                    <input type="text" name="degree_major" required>
                                </div>
                                <div class="form-group">
                                    <label>Institution Name *</label>
                                    <input type="text" name="degree_institute" required>
                                </div>
                                <div class="form-group">
                                    <label>Course Type *</label>
                                    <select name="degree_course_type" required>
                                        <option>ongoing</option>
                                        <option>complete</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Result</label>
                                    <input type="text" name="degree_result" required>
                                </div>
                                <div class="form-group">
                                    <label>Year Passed</label>
                                    <input type="text" name="degree_passed_year" required>
                                </div>
                            </div>
                        </div>
                        <div class="single_create_resume">
                            <h5>PROFESSIONAL INFORMATION</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="prof_designation" required>
                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="prof_company" required>
                                </div>
                                <div class="form-group">
                                    <label>Job Start *</label>
                                    <input type="date" name="prof_start" required>
                                </div>
                                <div class="form-group">
                                    <label>Job Status</label>
                                    <select name="prof_status" required>
                                        <option>status</option>
                                        <option>still continuing</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Job End *</label>
                                    <input type="date" name="prof_end" required>
                                </div>
                            </div>
                        </div>
                        <div class="single_create_resume">
                            <h5>LOGIN INFORMATION</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="text" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Retype Password *</label>
                                    <input type="password" name="password_confirmation" required>
                                </div>
                                <div class="form-group">
                                    <label>Profile Image *</label>
                                    <input type="file" name="picture" placeholder="choose image" required>
                                </div>
                            </div>
                        </div>
                        <div class="job_apply">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
