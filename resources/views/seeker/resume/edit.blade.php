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
                                <a class="nav-link active" id="Personal-tab" data-toggle="tab" href="#Personal"
                                    role="tab" aria-controls="Personal" aria-selected="true">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Education-tab" data-toggle="tab" href="#Education" role="tab"
                                    aria-controls="Education" aria-selected="false">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Experience-tab" data-toggle="tab" href="#Experience" role="tab"
                                    aria-controls="Experience" aria-selected="false">Work Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Training-tab" data-toggle="tab" href="#Training" role="tab"
                                    aria-controls="Training" aria-selected="false">Training</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="Curricular-tab" data-toggle="tab" href="#Curricular" role="tab"
                                    aria-controls="Curricular" aria-selected="false">ExtraCurricular</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" id="Achivement-tab" data-toggle="tab" href="#Achivement" role="tab"
                                    aria-controls="Achivement" aria-selected="false">Achivement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Job_in-tab" data-toggle="tab" href="#Job_in" role="tab"
                                    aria-controls="Job_in" aria-selected="false">Jobs Interented In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Password-tab" data-toggle="tab" href="#Password" role="tab"
                                    aria-controls="Password" aria-selected="false">Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Photo-tab" data-toggle="tab" href="#Photo" role="tab"
                                    aria-controls="Photo" aria-selected="false">Photo</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Personal" role="tabpanel"
                                aria-labelledby="Personal-tab">
                                <form action="{{ url('seeker/profile') }}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">


                                        <div class="form-group">
                                            <label>Full Name *</label>
                                            <input name="name" value="{{ $user->name }}" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Father Name *</label>
                                            <input name="father" value="{{ $user->father }}" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Mother Name *</label>
                                            <input name="mother" value="{{ $user->mother }}" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth *</label>
                                            <input name="date_of_birth" value="{{ $user->date_of_birth }}" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender *</label>
                                            <select name="gender">
                                                <option>Female</option>
                                                <option>Male</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Religion *</label>
                                            <select name="religion">
                                                <option>islam</option>
                                                <option>himduism</option>
                                                <option>buddhi</option>
                                                <option>christian</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status *</label>
                                            <select name="marrital_status">
                                                <option>married</option>
                                                <option>unmarried</option>
                                                <option>widowed</option>
                                                <option>single</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input name="email" value="{{ $user->email }}" type="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile No *</label>
                                            <input name="mobile" value="{{ $user->mobile }}" type="number">
                                        </div>
                                        <div class="form-group">
                                            <label>District *</label>
                                            <select name="district">
                                                <option>sylhet</option>
                                                <option>dhaka</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Present Address *</label>
                                            <input name="address" value="{{ $user->address }}" type="text">
                                        </div>
                                        {{-- <div class="form-group">
                                        <label>National ID </label>
                                        <input type="text">
                                    </div> --}}
                                        <div class="form-group">
                                            <label>Facebook ID </label>
                                            <input name="company_facebook" value="{{ $user->company_facebook }}"
                                                type="text">
                                        </div>
                                        {{-- <div class="form-group">
                                        <label>User Name *</label>
                                        <input type="text">
                                    </div> --}}
                                        <div class="form-group">
                                            <label>Career Objective *</label>
                                            <textarea name="objective" cols="45"
                                                rows="5">{{ $user->objective }}</textarea>
                                        </div>
                                        <div class="job_apply">
                                            <input type="submit" value="Update" class="btn btn-secondary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="Education" role="tabpanel" aria-labelledby="Education-tab">
                                <form action="{{ url('seeker/profile/degree') }}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Degree Name *</label>
                                            <select name="name" required>
                                                <option>hsc</option>
                                                <option>ssc</option>
                                                <option>bechelor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Degree Title *</label>
                                            <input name="title" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Major *</label>
                                            <input name="major" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Institution Name *</label>
                                            <input name="inst" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Course Type *</label>
                                            <select name="course_type" required>
                                                <option>ongoing</option>
                                                <option>complete</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Result</label>
                                            <input name="result" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Year Passed</label>
                                            <input name="passed" type="number" required>
                                        </div>
                                        <div class="job_apply">
                                            <input type="submit" class="btn btn-secondary" value="Add">
                                        </div>
                                    </div>
                                </form>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Degree Title</th>
                                                <th scope="col">Institution</th>
                                                <th scope="col">Major</th>
                                                {{-- <th scope="col">Semester</th> --}}
                                                <th scope="col">Passed</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Result</th>
                                                {{-- <th scope="col">Pass</th> --}}
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (\App\Degree::where('user_id',Auth::id())->get() as $degree)
                                            <tr>
                                                <th scope="row">{{ $degree->id }}</th>
                                                {{-- <td>{{ $degree->name }}</td> --}}
                                                <td>{{ $degree->title }}</td>
                                                <td>{{ $degree->inst }}</td>
                                                <td>{{ $degree->major }}</td>
                                                <td>{{ $degree->passed }}</td>
                                                <td>{{ $degree->course_type }}</td>
                                                <td>{{ $degree->result }}</td>
                                                <td>
                                                    <form action="{{ url('seeker/profile/degree/'.$degree->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="btn btn-secondary" value="Delete">
                                                    </form>
                                                </td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Experience" role="tabpanel" aria-labelledby="Experience-tab">
                                <form action="{{ url('seeker/profile/experience') }}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                        <div class="form-group">
                                            <label>Designation*</label>
                                            <input type="text" name="designation" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Company*</label>
                                            <input type="text" name="company" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Date*</label>
                                            <input type="date" name="start" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Job Status</label>
                                            <select name="status" required>
                                                <option>Status</option>
                                                <option>still Working</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>End Date*</label>
                                            <input type="date" name="end" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Responsibilities*</label>
                                            <input type="text" name="responsibility" required>
                                        </div>
                                        <div class="job_apply">
                                            <input type="submit" class="btn btn-secondary" value="Add">
                                        </div>
                                    </div>
                                </form>
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
                                            @foreach (\App\Experience::where('user_id',Auth::id())->get() as
                                            $experience)
                                            <tr>
                                                <th scope="row">{{ $experience->id }}</th>
                                                <td>{{ $experience->designation }}</td>
                                                <td>{{ $experience->company }}</td>
                                                <td>{{ $experience->responsibility }}</td>
                                                <td>{{ $experience->start }}</td>
                                                <td>{{ $experience->status }}</td>
                                                <td>{{ $experience->end }}</td>
                                                <td>{{ $experience->responsibility }}</td>
                                                <td>
                                                    <form
                                                        action="{{ url('seeker/profile/experience/'.$experience->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="btn btn-secondary" value="Delete">
                                                    </form>
                                                </td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Training" role="tabpanel" aria-labelledby="Training-tab">
                                <form action="{{ url('seeker/profile/training') }}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                        <div class="form-group">
                                            <label>Title*</label>
                                            <input type="text" name="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Institution*</label>
                                            <input type="text" name="inst" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Location*</label>
                                            <input type="text" name="location">
                                        </div>
                                        <div class="form-group">
                                            <label>Duration</label>
                                            <select name="duration" required>
                                                <option>Status</option>
                                                <option>still Working</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Details*</label>
                                            <input type="text" name="details">
                                        </div>
                                        <div class="job_apply">
                                            <input type="submit" class="btn btn-secondary" value="Add">
                                        </div>
                                    </div>
                                </form>
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
                                                @foreach (\App\Training::where('user_id',Auth::id())->get() as
                                                $training)
                                                <tr>
                                                    <th scope="row">{{ $training->id }}</th>
                                                    <td>{{ $training->title }}</td>
                                                    <td>{{ $training->inst }}</td>
                                                    <td>{{ $training->details }}</td>
                                                    <td>{{ $training->location }}</td>
                                                    <td>{{ $training->duration }}</td>
                                                    <td></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="Curricular" role="tabpanel" aria-labelledby="Curricular-tab">
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
                            </div> --}}
                            <div class="tab-pane fade" id="Achivement" role="tabpanel" aria-labelledby="Achivement-tab">
                                <form action="{{ url('seeker/profile/achivement') }}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                        <div class="form-group">
                                            <label>Details</label>
                                            <input type="text" name="name" required>
                                        </div>
                                        <div class="job_apply">
                                            <input type="submit" class="btn btn-secondary" value="Add">
                                        </div>
                                    </div>
                                </form>
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
                                            @foreach (\App\Achivement::where('user_id',Auth::id())->get() as
                                            $achivement)
                                            <tr>
                                                <th scope="row">{{ $achivement->id }}</th>
                                                <td>{{ $achivement->name }}</td>
                                                <td></td>
                                            </tr>
                                            @endforeach
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
                                <form action="{{ url('seeker/profile/password/change') }}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="old" required>
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" required>
                                        </div>
                                        <div class="job_apply">
                                            <input type="submit" class="btn btn-secondary" value="Add">
                                        </div>
                                    </div>
                                </form>
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
