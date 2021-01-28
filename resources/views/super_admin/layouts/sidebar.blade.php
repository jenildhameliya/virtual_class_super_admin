<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Virtual Class</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Super Admin</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-male"></i>
              <p>
                Admin
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admincreate') }}" class="nav-link">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Create Admin</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link">
                  <i class="fa fa-users nav-icon nav-icon"></i>
                  <p>Admin Details</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-user-circle nav-icon"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('teachershow') }}" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Teacher</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('studentshow') }}" class="nav-link">
                  <i class="fa fa-graduation-cap nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-paper-plane nav-icon"></i>
              <p>
                Subscriptions
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('subscriptioncreate') }}" class="nav-link">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Add Plans</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('subscription') }}" class="nav-link">
                  <i class="fa fa-eye nav-icon"></i>
                  <p>View Plans</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>