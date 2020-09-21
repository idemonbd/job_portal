@extends('layouts.dashboard')
@section('admin-dashboard')
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
            @include('users.admin.partials.sidebar')
        </div>
    </div>
    <div class="col-md-9">
     <div class="card mb-5">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAdmin"
       id="#addSalaryAmount">Add Admin</button>
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
         <tr>
          <td>1</td>
          <td>Fiver</td>
          <td><img src=""></td>
          <td>1-1-2020</td>
          <td>
           <button  data-target="#updateAdmin" id="#updateAdminName" type="button" class="btn btn-warning" data-toggle="modal"
           ><i class="fas fa-user-edit">Update</i></button>
           <button  data-target="#deleteAdmin" id="#deleteAdminName" type="button" class="btn btn-danger" data-toggle="modal"
           ><i class="fas fa-trash">Delete</i>
           </button>
          </td>
         </tr>
         
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
  <!--Add Salary Modal Center -->
  <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="addAdminName">Add Admin</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <form action="" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
       <input name="cat_name" class="form-control  mb-3" type="text" placeholder="Add Degree Name">
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-success">Save</button>
      </div>
     </form>
    </div>
   </div>
  </div>
  <!--Update Salary Modal Center -->
  <div class="modal fade" id="updateAdmin" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="updateAdminName">Update Admin</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <form action="" method="POST" enctype="multipart/form-data">
      
      <div class="modal-body">
       <input type="hidden" name="Admin_id" id="Admin_id">
       <label class="font-weight-bold">Admin Name</label>
       <input name="amount" id="amount" class="form-control  mb-3" type="text" placeholder="Update Degree Name">
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-warning">Update</button>
      </div>
     </form>
    </div>
   </div>
  </div>
  <!--Delete Salary Modal Center -->
  <div class="modal fade" id="deleteAdmin" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="deleteAdminName">Delete Admin</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <form action="" method="POST" enctype="multipart/form-data">
      
      <div class="modal-body">
       <input type="hidden" name="salary_id" id="salary_id">
       Are You Sure,You Want To Delete This Admin?
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