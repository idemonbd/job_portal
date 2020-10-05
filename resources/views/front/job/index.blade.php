@extends('layouts.front')

@section('content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content">
            <div class="banner_search">
                <form action="{{ url('search') }}" method="GET">
                    <div class="form-row">
                        <div class="form-group">
                            <input name="q" type="text" placeholder="location" required>
                        </div>
                        <div class="form-group">
                            <select name="cat">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="button_search">
                            <i class="fas fa-search"></i>
                        </button>
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
            @foreach ($jobs as $job)
            <a href="{{ url('job/'.$job->id) }}">
                <div class="single_job">
                    <div class="job_company_logo">
                        <img src="{{ asset('public/storage/'.$job->logo) }}" alt="">
                        <div class="job_title">
                            <h5>{{ $job->title }}</h5>
                            <p>{{$job->category->name}}</p>
                        </div>
                    </div>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>{{$job->location}}</p>
                    </div>
                    <div class="job_type">
                        <p class="part_time">part time</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<!-- End JobList In Home Page -->
@endsection