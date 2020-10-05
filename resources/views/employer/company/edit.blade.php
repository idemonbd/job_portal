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
                    @include('employer.partials.sidebar')
                </div>
            </div>
            <div class="col-md-10">
                <div class="edit_resume_area">
                    <div class="container">
                        <div class="tab-content" id="myTabContent">
                            <form action="{{ url('employer/company/update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="create-resume_form">
                                    <div class="form-group">
                                        <label>Company Name *</label>
                                        <input type="text" name="company_name" value="{{ $user->company_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Email *</label>
                                        <input type="text" name="company_email" value="{{ $user->company_email }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Mobile No *</label>
                                        <input type="text" name="company_mobile" value="{{ $user->company_mobile }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Address *</label>
                                        <input type="text" name="company_address" value="{{ $user->company_address }}">
                                    </div>
                                    <div class="form-group">
                                        <label>twitter ID </label>
                                        <input type="text" name="company_twitter" value="{{ $user->company_twitter }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook ID </label>
                                        <input type="text" name="company_facebook" value="{{ $user->company_facebook }}">
                                    </div>
                                </div>
                                <div class="job_apply">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit Resume -->
            </div>
        </div>
    </div>
</div>
@endsection
