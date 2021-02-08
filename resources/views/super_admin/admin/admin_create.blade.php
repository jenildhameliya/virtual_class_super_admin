@include('super_admin.layouts.header')
  
@include('super_admin.layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('admin') }}">Admin Detail</a></li>
              <li class="breadcrumb-item active">Create Admin</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
      <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div><hr style="border-bottom: 3px solid black;"></div>
      </div>
    </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
              <!-- form start -->
              <form id="adminForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Enter Name <span style="color: red">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                  </div> 

                  <div class="form-group">
                    <label>Enter Email <span style="color: red">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label>Enter Image <span style="color: red">*</span></label>
                    <input type="file" name="image" class="form-control" placeholder="Enter Password">
                  </div>

                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card-body">
                  <div class="form-group">
                    <label>Enter School Name <span style="color: red">*</span></label>
                    <input type="text" name="schoolname" class="form-control" placeholder="Enter School Name">
                  </div>

                  <div class="form-group">
                    <label>Enter Password <span style="color: red">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('admin') }}" class="btn btn-danger">Cancel</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  
  <script>
$(document).ready(function() {
  $('#adminForm').validate({
    rules: {
      name: {
        required: true,
      },
      schoolname: {
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
      terms: {
        required: true
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
      },
      schoolname: {
        required: "Please enter school name",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
  });
});
</script>
  @include('super_admin.layouts.footer')