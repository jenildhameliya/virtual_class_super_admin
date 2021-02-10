@include('super_admin.layouts.header')
  
@include('super_admin.layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
              <li class="breadcrumb-item active">Admin Detail</li>
            </ol>
          </div><!-- /.col -->
          
      </div>
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Admin Detail</h1>
                </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <ol class="breadcrumb float-sm-right">
                    <div class="pull-right">
                      <a href="{{ route('user_create') }}" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add User</a>

                      <a href="{{ route('admincreate') }}" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add Admin</a>
                    </div>
                    </ol>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          <div><hr style="border-bottom: 3px solid black;"></div>
        </div>
      </div>

      
      <!-- student show table start -->
      <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>School Name</th>
                      <th>Email</th>
                      <th>Image</th>
                      <th>Action</th>
                      <th>Login</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Abc</td>
                      <td>Abc</td>
                      <td>Abc@gmail.com</td>
                      <td>Abc.jpg</td>
                      <td>
                        <a href="{{ route('adminedit') }}" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
                      <td><button class="btn btn-success">Login</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
    <!-- student show table end -->
  </div>
  @include('super_admin.layouts.footer')