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
              <li class="breadcrumb-item active">View Plans</li>
            </ol>
            <h1>Subscriptions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{ route('subscriptioncreate') }}"><i class="fa fa-plus-circle"style="font-size:40px;color:grey;" aria-hidden="true" title="Add Subscription"></i></a>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('super_admin.layouts.footer')