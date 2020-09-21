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
			<div class="col-md-3">
				<div class="view_left">
					@include('admin.partials.sidebar')
				</div>
			</div>
			<div class="col-md-9">
				<div class="view_right">
					<div class="profile_des">
						<div class="single_profile_box">
							<!-- Start Browse Categories -->
							<div class="categories_area">
								<div class="container">
									<div class="section_title">
										<h4>Dashboard</h4>
									</div>
									<div class="all_categories">
										<div class="single_categories">
											<div class="cat_icon icon_img">
												<!-- <i class="fas fa-home"></i> -->
												<img src="{{ asset('/public') }}/admin/assets/images/bank.png" alt="">
											</div>
											<p>Total Job</p>
											<span>({{ $count['job'] }})</span>
										</div>
										<div class="single_categories">
											<div class="cat_icon icon_img">
												<!-- <i class="fas fa-home"></i> -->
												<img src="{{ asset('/public') }}/admin/assets/images/bank.png" alt="">
											</div>
											<p>Total Employer</p>
											<span>({{ $count['employer'] }})</span>
										</div>
										<div class="single_categories">
											<div class="cat_icon icon_img">
												<!-- <i class="fas fa-home"></i> -->
												<img src="{{ asset('/public') }}/admin/assets/images/bank.png" alt="">
											</div>
											<p>Total Job Seeker</p>
											<span>({{ $count['seeker'] }})</span>
										</div>
										<div class="single_categories">
											<div class="cat_icon icon_img">
												<!-- <i class="fas fa-home"></i> -->
												<img src="{{ asset('/public') }}/admin/assets/images/bank.png" alt="">
											</div>
											<p>Total Admin</p>
											<span>({{ $count['admin'] }})</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Browse Categories -->
@endsection