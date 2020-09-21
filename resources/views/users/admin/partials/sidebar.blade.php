<h5>Admin Profile</h5>
<ul class="view_left_menu">
    <li><a href="{{ url('/') }}/admin">Dashboard</a></li>
    <li><a href="{{ url('/') }}/admin/edit_profile">Edit Profile</a></li>
    <li><a href="{{ url('/') }}/admin/add_categories">Add Job Categories</a></li>
    <li><a href="{{ url('/') }}/admin/add_education">Add Education</a></li>
    <li><a href="{{ url('/') }}/admin/post_job">Post Job</a></li>
    <li><a href="{{ url('/') }}/admin/manage_jobSeeker">Manage JobSeeker Profile</a></li>
    <li><a href="{{ url('/') }}/admin/manage_employer">Manage Employer Profile</a></li>
    <li><a href="{{ url('/') }}/admin/manage_admin">Manage Admin Profile</a></li>
    <li>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>