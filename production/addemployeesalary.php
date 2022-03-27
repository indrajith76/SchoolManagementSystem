<?php include('connection.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fas fa-university"></i> <span>Shyamoli ideal.. polytechnic institute</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar  -->
            <?php include('sidebar.php') ?>
          </div>
        </div>

        <!-- top navigation -->
        <?php include('topnav.php') ?>

        
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Employee Salary</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Employee </h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      ID No<input type="text" class="form-control" name="idno" value="" />
                    </div>
                    <div class="col-md-6">
                      Name<input type="text" class="form-control" name="name" value=""/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      Categories<select class="form-control" name="categories" id="categories">
                      <option disabled="" selected="">Select Categories</option>
                      <option value="Principle">Principle</option>
                      <option value="Techer">Techer</option>
                      <option value="Others">Others</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                      Month<select name="month" class="form-control" id="month">
                          <option disabled="" selected="">Select Month</option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      Gender<select name="gender" class="form-control" id="gender">
                          <option disabled="" selected="">Select Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      Date<input type="date" class="form-control" name="date" value=""/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      Salary<input type="text" class="form-control" name="salary" value=""/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"><br>
                      <input type="submit" class="btn btn-dark" name="submit" value="submit"/>
                    </div>
                  </div>
                
                
                
                
                
                
                
                
              </form>
  <?php 
    $slno = $_POST['slno'];
    $idno = $_POST['idno'];
    $en = $_POST['name'];
    $cg = $_POST['categories'];
    $mnt = $_POST['month'];
    $gn = $_POST['gender'];
    $dt = $_POST['date'];
    $sl = $_POST['salary'];
    $_POST['submit'];
    

    $query = "INSERT INTO salarylist VALUES ('$slno','$idno','$en','$cg','$mnt','$gn','$dt','$sl')";
    $data = mysqli_query($conn,$query);


  ?>
  						
							</div>
						</div>
					</div>

			<!-- /page content -->

        <!-- footer content -->
        <?php include('footer.php') ?>
    
  </body>

</html>