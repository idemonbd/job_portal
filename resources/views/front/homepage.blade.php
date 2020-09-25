@extends('layouts.front')

@section('content')
<!-- Start Header Banner Area -->
<div class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h2>The Easiest Way to Get Your New Job</h2>
            <p>Find jobs, create trackable resumes and enrich your applications.</p>
            <div class="banner_search">
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="email" placeholder="location">
                        </div>
                        <div class="form-group">
                            <select>
                                @foreach ($categories as $category)
                                    <option value="">{{ $category->name }}</option>                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="button_search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Start Browse Categories -->
<div class="categories_area">
    <div class="container">
        <div class="section_title">
            <h4>Browse Categories</h4>
            <p>Most popular categories of portal, sorted by popularity
            </p>
        </div>
        <div class="all_categories">
            
            @foreach ($categories as $category)
            <a href="{{ url('category/'.$category->id) }}">
                <div class="single_categories">
                    <div class="cat_icon icon_img">
                        <!-- <i class="fas fa-home"></i> -->
                        <img src="{{ asset('public/storage'.'/'.$category->logo) }}" alt="">
                    </div>
                    <p>{{ $category->name }}</p>
                    <span>({{ $category->jobs->count() }} jobs)</span>
                </div> 
            </a>               
            @endforeach
        </div>
    </div>
</div>
<!-- End Browse Categories -->
<!-- Start How It Works  -->
<div class="how_it_work_area">
    <div class="container">
        <div class="section_title">
            <h4>How It Works?</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et
                metus effici turac fringilla lorem facilisis.
            </p>
        </div>
        <div class="how_it_work_list">
            <div class="single_work">
                <i class="far fa-user"></i>
                <h5>How It Works?</h5>
                <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find
                    place best.</p>
            </div>
            <div class="single_work">
                <i class="far fa-user"></i>
                <h5>Search Jobs</h5>
                <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find
                    place best.</p>
            </div>
            <div class="single_work">
                <i class="far fa-user"></i>
                <h5>Apply</h5>
                <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find
                    place best.</p>
            </div>
        </div>
    </div>
</div>
<!-- End How It Works  -->
<!-- Start JobList In Home Page -->
<div class="joblist_area">
    <div class="container">
        <div class="section_title">
            <h4>Hundreds of Jobs From All Over the Globe</h4>
        </div>
        <div class="joblist">
            @foreach ($jobs as $job)
                <a href="{{ url('job/'.$job->id) }}">
                    <div class="single_job">
                        <div class="job_company_logo">
                            <img src="{{ asset('storage/'.$job->logo) }}" alt="">
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
            <div class="joblist_btn">
                <a href="{{ url('job') }}">Browse all jobs</a>
            </div>
        </div>
    </div>
</div>
<!-- End JobList In Home Page -->
@endsection