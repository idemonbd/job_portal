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

<!-- Start Edit Resume -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-2">
                <div class="view_left">
                    @include('seeker.partials.sidebar')
                </div>
            </div>
            <div class="col-md-10">
                <div class="edit_resume_area">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Personal-tab" data-toggle="tab" href="#Personal" role="tab" aria-controls="Personal" aria-selected="true">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Education-tab" data-toggle="tab" href="#Education" role="tab" aria-controls="Education" aria-selected="false">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Experience-tab" data-toggle="tab" href="#Experience" role="tab" aria-controls="Experience" aria-selected="false">Work Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Training-tab" data-toggle="tab" href="#Training" role="tab" aria-controls="Training" aria-selected="false">Training</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Curricular-tab" data-toggle="tab" href="#Curricular" role="tab" aria-controls="Curricular" aria-selected="false">ExtraCurricular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Achivement-tab" data-toggle="tab" href="#Achivement" role="tab" aria-controls="Achivement" aria-selected="false">Achivement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Job_in-tab" data-toggle="tab" href="#Job_in" role="tab" aria-controls="Job_in" aria-selected="false">Jobs Interented In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Password-tab" data-toggle="tab" href="#Password" role="tab" aria-controls="Password" aria-selected="false">Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Photo-tab" data-toggle="tab" href="#Photo" role="tab" aria-controls="Photo" aria-selected="false">Photo</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Personal" role="tabpanel" aria-labelledby="Personal-tab">
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
                                        <label> Religion *</label>
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
                                    <div class="form-group">
                                        <label>National ID </label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook ID </label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>User Name *</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Career Objective *</label>
                                        <textarea cols="45" rows="5"></textarea>
                                    </div>
                                    <div class="job_apply">
                                        <p><a href="#">update</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Education" role="tabpanel" aria-labelledby="Education-tab">
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
                                    <div class="job_apply">
                                        <p><a href="#">add</a></p>
                                    </div>
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Degree Title</th>
                                                <th scope="col">Institution</th>
                                                <th scope="col">Major</th>
                                                <th scope="col">Result</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Pass</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Pass</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>masters</td>
                                                <td>metro</td>
                                                <td>cse</td>
                                                <td>4.76</td>
                                                <td>2020</td>
                                                <td>2020</td>
                                                <td>Ongoing</td>
                                                <td>cse</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Experience" role="tabpanel" aria-labelledby="Experience-tab">
                                <div class="create-resume_form">
                                    <div class="form-group">
                                        <label>Designation*</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Company*</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date*</label>
                                        <input type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Job Status</label>
                                        <select>
                                            <option>Status</option>
                                            <option>still Working</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>End Date*</label>
                                        <input type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Responsibilities*</label>
                                        <input type="text">
                                    </div>
                                    <div class="job_apply">
                                        <p><a href="#">add</a></p>
                                    </div>
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Company </th>
                                                <th scope="col">Responsibilities</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">End Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>masters</td>
                                                <td>metro</td>
                                                <td>cse</td>
                                                <td>4.76</td>
                                                <td>2020</td>
                                                <td>2020</td>
                                                <td>Ongoing</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Training" role="tabpanel" aria-labelledby="Training-tab">
                                <div class="create-resume_form">
                                    <div class="form-group">
                                        <label>Title*</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Institution*</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Location*</label>
                                        <input type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <select>
                                            <option>Status</option>
                                            <option>still Working</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Details*</label>
                                        <input type="date">
                                    </div>
                                    <div class="job_apply">
                                        <p><a href="#">add</a></p>
                                    </div>
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Institution </th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>masters</td>
                                                <td>metro</td>
                                                <td>cse</td>
                                                <td>4.76</td>
                                                <td>2020</td>
                                                <td>2020</td>
                                                <td>Ongoing</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Curricular" role="tabpanel" aria-labelledby="Curricular-tab">
                                <div class="create-resume_form">
                                    <div class="form-group">
                                        <label>Organization*</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Position*</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Duration*</label>
                                        <input type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Details</label>
                                        <input type="date">
                                    </div>
                                    <div class="job_apply">
                                        <p><a href="#">add</a></p>
                                    </div>
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Organization</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Organization</td>
                                                <td>metro</td>
                                                <td>cse</td>
                                                <td>4.76</td>
                                                <td>2020</td>
                                                <td>2020</td>
                                                <td>Ongoing</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Achivement" role="tabpanel" aria-labelledby="Achivement-tab">
                                <div class="create-resume_form">
                                    <div class="form-group">
                                        <label>Details</label>
                                        <input type="text">
                                    </div>
                                    <div class="job_apply">
                                        <p><a href="#">add</a></p>
                                    </div>
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Organization</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Job_in" role="tabpanel" aria-labelledby="Job_in-tab">
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Action</th>
                                                <th scope="col">Category Name
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <input type="checkbox">
                                                </th>
                                                <td>Organization</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <input type="checkbox">
                                                </th>
                                                <td>Organization</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <input type="checkbox">
                                                </th>
                                                <td>Organization</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Password" role="tabpanel" aria-labelledby="Password-tab">
                                <div class="create-resume_form">
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="date">
                                    </div>
                                    <div class="job_apply">
                                        <p><a href="#">Update</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Photo" role="tabpanel" aria-labelledby="Photo-tab">
                                <div class="create-resume_form edit_resume_photo">
                                    <img src="{{asset('/admin/assets/images/pro.jpeg')}}" alt="">
                                    <div class="form-group">
                                        <label>Upload Photo</label>
                                        <input type="file">
                                    </div>
                                    <div class="job_apply">
                                        <p><a href="#">Update</a></p>
                                    </div>
                                </div>
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
