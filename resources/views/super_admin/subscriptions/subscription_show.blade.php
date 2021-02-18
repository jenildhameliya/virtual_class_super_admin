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
              <li class="breadcrumb-item active">View Plans</li>
            </ol>
         </div>
       </div>
       <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Subscription Detail</h1>
                </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('subscriptioncreate') }}" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add Subscription</a>
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
                      <th>Type</th>
                      <th>Amount</th>
                      <th>Detail</th>
                      <th>Duration</th>
                      <th>Limitations Of Students</th>
                      <th>Limitations Of Faculties</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Type</td>
                      <td>Amount</td>
                      <td>Detail</td>
                      <td>Duration</td>
                      <td>Limitations Of Students</td>
                      <td>Limitations Of Faculties</td>
                      <td>
                        <a href="{{ route('subscriptionedit') }}" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
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