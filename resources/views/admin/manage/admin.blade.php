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
                            <h6>Manage Admins</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <th scope="row">{{ $user->name }}</th>
                                        <th scope="row">{{ $user->email }}</th>
                                        <th scope="row">
                                            <form action="{{ url('admin/manage_user/') }}/{{ $user->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                @if ($user->status == 1)
                                                    <input type="hidden" name="status" value="0">
                                                    <button type="submit" class="btn btn-warning">Deactive</button>
                                                    @else                                                
                                                    <input type="hidden" name="status" value="1">
                                                    <button type="submit" class="btn btn-info">Active</button>
                                                @endif
                                            </form>
                                        </th>
                                        <td>
                                            <button onclick="setDelete({{ $user->id }})" data-target="#delete_modal" type="button" class="btn btn-danger"
                                                data-toggle="modal"><i class="fas fa-trash">Delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $users->links() }}
                    {{-- <nav aria-label="Page navigation example">
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
                    </nav> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!--Delete Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserName">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" id="delete_form">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are You Sure,You Want To Delete This User?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script>
        function setDelete(id){
            $('#delete_form').attr('action', '{{ url('admin/manage_user') }}/'+id);
        }
    </script>
@endsection