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
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('subscription') }}">View Plans</a></li>
              <li class="breadcrumb-item active">Add Plans</li>
            </ol>
            <h1>Subscriptions Create</h1>
          </div><!-- /.col -->
          
        </div>
      </div>
    </div>
  </div>
  @include('super_admin.layouts.footer')