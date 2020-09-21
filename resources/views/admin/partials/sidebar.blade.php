<h5>Admin Profile</h5>
<ul class="view_left_menu">
    <li><a href="{{ url('/') }}/admin">Dashboard</a></li>
    <li><a href="{{ url('/') }}/admin/profile">Edit Profile</a></li>
    <li><a href="{{ url('/') }}/admin/category">Add Job Categories</a></li>
    <li><a href="{{ url('/') }}/admin/degree">Add Education</a></li>
    <li><a href="{{ url('/') }}/admin/job/create">Post Job</a></li>
    <li><a href="{{ url('/') }}/admin/manage_seeker">Manage JobSeeker Profile</a></li>
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