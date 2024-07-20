<?php require_once('db_config.php'); ?>

<?php include_once('common/header.php'); ?>
<!-- Navbar -->
<?php include_once('common/navbar.php'); ?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php include_once('common/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Movie Setup</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Movie Setup</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fill the information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <p class="text-success">
                <?php 
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                ?>
              </p>
              <form action="addSetupProcess.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="movie_id">Select Movie</label>
                    <select id="movie_id" class="form-control" name="movie_id">
                    <?php 
                    $query="SELECT * FROM `movies` ";
                      $result = mysqli_query($connection,$query);
                      if($result->num_rows>0){
                          while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['movie_name'];?></option>
                        <?php
                          }
                      }?>
                    </select>
                    </div>
                  <div class="form-group">
                    <label for="movie_theater_id">Select Movie Theater</label>
                    <select name="movie_theater_id" id="movie_theater_id" class="form-control">
                    <?php 
                    $query="SELECT * FROM `movie_theaters` ";
                      $result = mysqli_query($connection,$query);
                      if($result->num_rows>0){
                          while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['movie_theater_name'];?></option>
                        <?php
                          }
                      }?>
                    </select>
                    
                    <div class="form-group">
                    <label for="time_slot">Select Time Slot</label>
                    <select name="time_slot" id="time_slot" class="form-control">
                        <option value="8:00pm to 9:00pm">8:00pm to 9:00pm</option>
                        <option value="9:00pm to 10:00pm">9:00pm to 10:00pm</option>
                        <option value="10:00pm to 11:00pm">10:00pm to 11:00pm</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="show_date">Select Date</label>
                    <input type="date" class="form-control" id="show_date" placeholder="Date" name="show_date">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
            
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('common/footer.php'); ?>
  