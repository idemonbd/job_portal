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
<!-- Start Edit Resume -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="view_left">
                    @include('admin.partials.sidebar')
                </div>
            </div>
            <div class="col-md-9">
                <div class="card mb-5">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_modal">Add
                            Categories</button>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>@if ($category->logo)
                                        <img src="{{ asset('public/storage'.'/'.$category->logo) }}" style="height: 80px; width:100px">
                                    @endif</td>
                                    <td>{{ $category->created_at->diffForHumans() }}</td>
                                    <td>
                                        <button onclick="setUpdate({{ $category->id }},'{{ $category->name }}')" data-target="#update_modal" type="button" class="btn btn-warning"
                                            data-toggle="modal"><i class="fas fa-user-edit">Update</i></button>
                                        <button onclick="setDelete({{ $category->id }})" data-target="#delete_modal" type="button" class="btn btn-danger"
                                            data-toggle="modal"><i class="fas fa-trash">Delete</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>
    <!---Container Fluid-->
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!--Add Modal -->
    <div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoriesName">Add Categories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body form-group">
                        <label for="name">Name</label>
                        <input name="name" class="form-control  mb-3" type="text">
                        <label for="logo">Logo</label>
                        <input name="logo" class="form-control  mb-3" type="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!--Update Modal -->
    <div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateCategoriesName">Update Categories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="update_form">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <label class="font-weight-bold">Name</label>
                        <input name="name" id="name_field" class="form-control  mb-3" type="text">
                        <label for="logo">Logo</label>
                        <input name="logo" class="form-control  mb-3" type="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!--Delete Modal -->
    <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteCategoriesName">Delete Categories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" id="delete_form">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are You Sure,You Want To Delete This Categories?
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
        function setUpdate(id,name){
            $('#name_field').val(name);
            $('#update_form').attr('action', '{{ url('/') }}/admin/category/'+id);
        }
        function setDelete(id){
            $('#delete_form').attr('action', '{{ url('/') }}/admin/category/'+id);
        }
    </script>
@endsection