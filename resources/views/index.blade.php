@extends('layouts.master')

@section('main-content')
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
                                <option selected>Choose a category</option>
                                <option>development</option>
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
            <div class="single_categories">
                <div class="cat_icon icon_img">
                    <!-- <i class="fas fa-home"></i> -->
                    <img src="admin/assets/images/bank.png" alt="">
                </div>
                <p>Finance</p>
                <span>(4286 jobs)</span>
            </div>
            <div class="single_categories">
                <div class="cat_icon icon_img">
                    <!-- <i class="fas fa-home"></i> -->
                    <img src="admin/assets/images/bank.png" alt="">
                </div>
                <p>Finance</p>
                <span>(4286 jobs)</span>
            </div>
            <div class="single_categories">
                <div class="cat_icon icon_img">
                    <!-- <i class="fas fa-home"></i> -->
                    <a href=""><img src="admin/assets/images/bank.png" alt=""></a>
                </div>
                <p>Finance</p>
                <span>(46 jobs)</span>
            </div>
            <div class="single_categories">
                <div class="cat_icon icon_img">
                    <!-- <i class="fas fa-home"></i> -->
                    <img src="admin/assets/images/bank.png" alt="">
                </div>
                <p>Finance</p>
                <span>(4286 jobs)</span>
            </div>
            <div class="single_categories">
                <div class="cat_icon icon_img">
                    <!-- <i class="fas fa-home"></i> -->
                    <img src="admin/assets/images/bank.png" alt="">
                </div>
                <p>Finance</p>
                <span>(4286 jobs)</span>
            </div>
            <div class="single_categories">
                <div class="cat_icon icon_img">
                    <!-- <i class="fas fa-home"></i> -->
                    <img src="admin/assets/images/bank.png" alt="">
                </div>
                <p>Finance</p>
                <span>(4286 jobs)</span>
            </div>
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
            <a href="job_details.html">
                <div class="single_job">
                    <div class="job_company_logo">
                        <img src="{{ asset('/') }}/admin/assets/images/company.jpg" alt="">
                        <div class="job_title">
                            <h5>web designer</h5>
                            <p>shopify</p>
                        </div>
                    </div>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>New York, New York</p>
                    </div>
                    <div class="job_type">
                        <p class="part_time">part time</p>
                    </div>
                </div>
            </a>
            <a href="job_details.html">
                <div class="single_job">
                    <div class="job_company_logo">
                        <img src="{{ asset('/') }}/admin/assets/images/company.jpg" alt="">
                        <div class="job_title">
                            <h5>web designer</h5>
                            <p>shopify</p>
                        </div>
                    </div>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>New York, New York</p>
                    </div>
                    <div class="job_type">
                        <p class="full_time">full time</p>
                    </div>
                </div>
            </a>
            <a href="job_details.html">
                <div class="single_job">
                    <div class="job_company_logo">
                        <img src="{{ asset('/') }}/admin/assets/images/company.jpg" alt="">
                        <div class="job_title">
                            <h5>web designer</h5>
                            <p>shopify</p>
                        </div>
                    </div>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>New York, New York</p>
                    </div>
                    <div class="job_type">
                        <p class="full_time">full time</p>
                    </div>
                </div>
            </a>
            <a href="job_details.html">
                <div class="single_job">
                    <div class="job_company_logo">
                        <img src="{{ asset('/') }}/admin/assets/images/company.jpg" alt="">
                        <div class="job_title">
                            <h5>web designer</h5>
                            <p>shopify</p>
                        </div>
                    </div>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>New York, New York</p>
                    </div>
                    <div class="job_type">
                        <p class="part_time">part time</p>
                    </div>
                </div>
            </a>
            <div class="joblist_btn">
                <a href="">Browse all jobs</a>
            </div>
        </div>
    </div>
</div>
<!-- End JobList In Home Page -->
@endsection