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
              <form id="adminForm" method="post" action="{{ route('admin_insert') }}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Plan <span style="color: red">*</span></label>
                    <select name="plan_id" id="plan_id" class="form-control" placeholder="Select Plan">
                      <option value="0">Select Plan</option>
                    </select>
                    <!-- <input type="text" name="name" class="form-control" placeholder="Enter Name"> -->
                  </div> 

                  <div class="form-group">
                    <label>School Type <span style="color: red">*</span></label>
                    <select name="school_type" id="school_type" class="form-control" placeholder="Select School Type">
                      <option value="0">Select School Type</option>
                    </select>
                    <!-- <input type="email" name="email" class="form-control" placeholder="Enter Email"> -->
                  </div>

                  <div class="form-group">
                    <label>User <span style="color: red">*</span></label>
                    <select name="user_id" id="user_id" class="form-control" placeholder="Select User">
                      <option value="0">Select User</option>
                    </select>
                    <!-- <input type="file" name="image" class="form-control" placeholder="Enter Password"> -->
                  </div>
                </div>
            </div>

            <div class="card-body">
                  <div class="form-group">
                    <label>School Name <span style="color: red">*</span></label>
                    <input type="text" name="schoolname" class="form-control" placeholder="Enter School Name">
                  </div>

                  <div class="form-group">
                    <label>School Address <span style="color: red">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="submit">
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
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