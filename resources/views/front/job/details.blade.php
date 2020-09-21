@extends('layouts.master')

@section('main-content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content width flex">
            <div class="jobs_banner_left flex">
                <div class="jobs_logo">
                    <img src="{{asset('/admin/assets/images/company-logo.png')}}" alt="">
                </div>
                <div class="jobs_logo_content">
                    <h2>Hiring UI Designer</h2>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>New York, New York</p>
                    </div>
                    <div class="job_post_date">
                        <i class="fas fa-calendar-week"></i>
                        <p> Posted 26 June, 2020</p>
                    </div>
                </div>
            </div>
            <div class="jobs_banner_right">
                <p>100Tk</p>
            </div>
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Start Job Details Area -->
<div class="job_details_area">
    <div class="container flex">
        <div class="job_details_left">
            <div class="single_job_del">
                <h5>Job Description</h5>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit

                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
            </div>
            <div class="single_job_del ">
                <h5>Required Knowledge, Skills, and Abilities
                </h5>
                <ol>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)
                    </li>
                    <li>Take a set of instructions or a stated problem and produce clean, modern design assets that are within the brand requirements of our company and our products.</li>
                    <li>Experience using Invision a plus</li>
                </ol>
            </div>
            <div class="single_job_del">
                <h5>Primary Areas of Accountability</h5>
                <ol>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                    <li>Experience using Invision a plus</li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                </ol>
            </div>
            <div class="single_job_del">
                <h5>Required Knowledge, Skills, and Abilities</h5>
                <ol>
                    <li>Advanced degree or equivalent experience in graphic and web design
                    </li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                    <li>Experience using Invision a plus</li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                    <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                </ol>
            </div>
            <div class="single_job_del">
                <h5>How To Apply
                </h5>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            </div>
            <div class="job_apply">
                <p><a href="applied_jobs">apply</a></p>
            </div>
        </div>
        <div class="job_details_right">
            <h5>Company Social</h5>
            <ul class="company_social">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Job Details Area -->
<!-- Start JobList In Jobs Page -->
<div class="joblist_area">
    <div class="container">
        <div class="joblist">
            <div class="section_title">
                <h4>related Jobs</h4>
            </div>
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
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
                <div class="job_apply">
                    <p><a href="applied_jobs">apply</a></p>
                </div>
            </div>
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
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
                <div class="job_apply">
                    <p><a href="applied_jobs">apply</a></p>
                </div>
            </div>
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
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
                <div class="job_apply">
                    <p><a href="applied_jobs">apply</a></p>
                </div>
            </div>
            <div class="single_job">
                <div class="job_company_logo">
                    <img src="{{asset('/admin/assets/images/company.jpg')}}" alt="">
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
                <div class="job_apply">
                    <p><a href="applied_jobs">apply</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
