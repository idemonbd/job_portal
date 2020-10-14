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
                    <div class="profile_des">
                        <div class="single_profile_box">
                            <h6> My Applied Jobs ({{ $jobs->count() }})</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Expected Salary</th>
                                        <th scope="col">Applyed Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <td>{{ $job->id }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->company }}</td>
                                        <td>{{ $job->applied->exp_salery }}</td>
                                        <td>{{ $job->created_at->format('d-m-Y') }}</td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Job Details Area -->
@endsection
