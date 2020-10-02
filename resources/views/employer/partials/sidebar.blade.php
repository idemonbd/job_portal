<h5>My Profile</h5>
<ul class="view_left_menu">
    <li><a href="{{ url('employer/job/create') }}">Post Job</a></li>
    <li><a href="{{ url('employer/company/edit') }}">edit Conmpany Profile</a></li>
    <li><a href="{{ url('employer/job/applied') }}">applied Candidates</a></li>
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
