<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="MBS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MBS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']['user_name'];?></a>
        </div>
      </div>
      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Movie Theater
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addMovieTheater.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Movie Theater</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewMovieTheater.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Movie Theater</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Movies
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addMovies.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Movies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewMovies.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Movies</p>
                </a>
              </li>
            </ul>
          </li>

           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Show Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addSetup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewSetup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Setup</p>
                </a>
              </li>

              

              
            </ul>

            <li class="nav-item">
                <a href="booking_details.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booked tickets</p>
                </a>
              </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>