@extends('backend.layouts.master')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>Edit icon
                 <a class="btn btn-success float-right" href="{{route('icon.view')}}"><i class="fa fa-list"></i>Edit icon</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
            <form method="post" action="{{route('icon.update',$editdata->id)}}" id="myform" autocomplete="off"  enctype="multipart/form-data">
               @csrf
                <div class="row">

                <div class="form_group col-md-6">
                  <label for="icon">icon</label>
                  <input  name="icon" value="{{$editdata->icon}}" class="form-control">
                 </div>

                <div class="form_group col-md-6">
                  <label for="number">Long Title</label>
                  <input type="number" name="number"  value="{{$editdata->number}}" class="form-control">
                 </div>

                 <div class="form_group col-md-6">
                    <label for="name">Long Title</label>
                    <input type="name" name="name"  value="{{$editdata->name}}" class="form-control">
                   </div>
                  
                  <div class="form-group col-md-6" style="padding-top: 25px">
                   <input type="submit" value="update" class="btn btn-primary">
                 </div>

                </div>
              </form>
              </div><!-- /.card-body -->
            </div>

            <!-- /.card -->
          </section>
         </div>
     </div>
        </section> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
   $(document).ready(function () {
  $('#myform').validate({
    rules:{
      name: {
        required: true,
      },
       usertype: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
       password2: {
        required: true,
        equalTo:'#password'
      }
    },
    messages: {
        name: {
        required: "Please enter your name",
      },
       usertype: {
        required: "Please select user role",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
     password2: {
        required: "Please enter confirm password",
        minlength: "confirm password does not match"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
  @endsection