<!-- Start Menu Area -->
<div class="menu_area sticky">
    <div class="container">
        <div class="header_menu">
            <div class="menu_logo">
                <h2>
                    <a href="{{ url('/') }}">Job<span>Panel</span></a>
                </h2>
            </div>
            <div class="menues">
                <ul>
                    <li><a href="{{ url('/') }}">home</a></li>
                    <li><a href="{{ url('/') }}/jobseeker/create-resume">jobseeker</a></li>
                    <li><a href="{{ url('/') }}/employer/create-company">employeer</a></li>
                </ul>
            </div>
            <div class="menu_login_area">
                <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ url('register') }}" class="btn btn-primary">Register</a>
            </div>
        </div>
    </div>
</div>
<!-- End Menu Area -->
