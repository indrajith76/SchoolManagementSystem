<?php include('connection.php');
error_reporting(0);
$query = "SELECT * FROM vehicles";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$_GET['vn'];
$_GET['rn'];
$_GET['n'];
$_GET['cl'];
$_GET['dob'];
$_GET['img'];

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

            <!-- sidebar -->
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
							<h3>Update Vehicles info</h3>
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
									<h2>Vehicles Registration form</h2>
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
                    Vehicle no<input type="text" class="form-control" name="vehicleno" value="<?php echo $_GET['vn']; ?>" required/>
                  </div>
                  <div class="col-md-6">
                  Reg. No<input type="text" class="form-control" name="regno" value="<?php echo $_GET['rn']; ?>" required/><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Brand Name<input type="text" class="form-control"  name="name" value="<?php echo $_GET['n']; ?>"/>
                  </div>
                  <div class="col-md-6">
                    Color<select class="form-control" name="color" id="class">
                      <option disabled="" selected=""><?php echo $_GET['cl']; ?></option>
                      <option value="Greed">Greed</option>
                      <option value="Blue">Blue</option>
                      <option value="Red">Red</option>
                      <option value="Other">Other</option>
                    </select><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Date Of Buy<input type="date" class="form-control" name="dateofbuy" value="<?php echo $_GET['dob']; ?>"/>
                  </div>
                  <div class="col-md-6">
                    Image<input type="file" name="image" class="form-control" value="<?php echo $_GET['img']; ?>" ><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="submit" class="btn btn-dark" name="submit" value="submit"/>
                  </div>
                
                  
                </div>
                
              </form>
  <?php 
  
    if($_POST['submit'])
    {
      $vn = $_POST['vehicleno'];
      $rn = $_POST['regno'];
      $n = $_POST['name'];
      $cl = $_POST['color'];
      $dob = $_POST['dateofbuy'];
      $img = $_POST['image'];

      $filename = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "vehicles/".$filename;
      move_uploaded_file($tempname,$folder);

      $query = "UPDATE vehicles SET regno='$rn', name='$n', color='$cl',dateofbuy ='$dob', image='$folder' WHERE vehicleno='$vn'";
      $data = mysqli_query($conn, $query);
      if($data)
      {
        echo "Record Updated Successfully.<a href='vehiclesinfo.php'>Check Updated List Here</a>";
      }
      else
      {
        echo "Record Not Updated";
      }
    }
    else
    {
      echo "Click Submit Button to Save the changes.";
    }
    


  ?>
  						
							</div>
						</div>
					</div>
          <div>
            <a href="vehiclesinfo.php"  id="backbtn"><i class="fas fa-arrow-circle-left" style="font-size: 40px;"></i><br>&nbsp; back</a>
          </div>
          <style>
            #backbtn {
              position: relative;
              left: 92%;
            }
          </style>
			<!-- /page content -->

        <!-- footer content -->
        <?php include('footer.php') ?>
    
  </body>

</html>