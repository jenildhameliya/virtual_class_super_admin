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
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                  <!-- form start -->
                  <form id="adminForm" method="post">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Plan Type <span style="color: red">*</span></label>
                        <!-- <select name="plan_id" id="plan_id" class="form-control" placeholder="Select Plan">
                          <option value="0">Select Plan</option>
                        </select> -->
                        <input type="text" name="plan_type" class="form-control" placeholder="Enter Plan Type">
                      </div> 

                      <div class="form-group">
                        <label>Plan Details <span style="color: red">*</span></label>
                        <!-- <select name="school_type" id="school_type" class="form-control" placeholder="Select School Type">
                          <option value="0">Select School Type</option>
                        </select> -->
                        <input type="text" name="plan_detail" class="form-control" placeholder="Enter Plan Details">
                      </div>

                      <div class="form-group">
                        <label>Limitations Of Students <span style="color: red">*</span></label>
                        <input type="text" name="limitation_of_students" class="form-control" placeholder="Enter Limitation Of Students">
                      </div>
                    </div>
                  </div>

                  <div class="card-body">
                      <div class="form-group">
                        <label>Plan Amount <span style="color: red">*</span></label>
                        <input type="text" name="plan_amount" class="form-control" placeholder="Enter Plan Amount">
                      </div>

                      <div class="form-group">
                        <label>Duration <span style="color: red">*</span></label>
                        <input type="text" name="duration" class="form-control" placeholder="Enter Plan Duration">
                      </div>

                      <div class="form-group">
                        <label>Limitations Of Faculties <span style="color: red">*</span></label>
                        <input type="text" name="limitation_of_faculties" class="form-control" placeholder="Enter Limitation Of Faculties">
                      </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{ route('subscription') }}" class="btn btn-danger">Cancel</a>
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
    </div>

  @include('super_admin.layouts.footer')