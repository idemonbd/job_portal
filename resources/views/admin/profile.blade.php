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
            <div class="col-md-3">
                <div class="view_left">
                    @include('admin.partials.sidebar')
                </div>
            </div>
            <div class="col-md-9">
                <div class="edit_resume_area">
                    <div class="container">
                        <div class="tab-content" id="myTabContent">
                           <form action="{{ url('admin/profile') }}" method="POST">
                            @csrf
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" value="{{ Auth::user()->name }}" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" value="{{ Auth::user()->email }}" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Company Mobile No *</label>
                                    <input type="number" value="{{ Auth::user()->mobile }}" name="mobile">
                                </div>
                                <div class="form-group">
                                    <label>Address *</label>
                                    <input type="text" value="{{ Auth::user()->address }}" name="address">
                                </div>
                            </div>
                            <div class="job_apply">
                                <input class="btn btn-secondary" type="submit" value="Update">
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
