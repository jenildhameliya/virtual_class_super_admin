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
              <li class="breadcrumb-item active"><a href="{{ route('subscription') }}">View Plans</a></li>
              <li class="breadcrumb-item active">Add Plans</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Subscriptions Create</h1>
                </div><!-- /.col -->
                  <div class="col-sm-6">
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          <div><hr style="border-bottom: 3px solid black;"></div>
        </div>
      </div>
    </div>

  @include('super_admin.layouts.footer')