<?php include('connection.php');
error_reporting(0);
$query = "SELECT * FROM admission";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$_GET['id'];
$_GET['rn'];
$_GET['sn'];
$_GET['cl'];
$_GET['ad'];
$_GET['rg'];
$_GET['dob'];
$_GET['gn'];
$_GET['img'];
$_GET['gmn'];

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
							<h3>Update Student Info</h3>
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
									<h2>Addmission Form</h2>
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
                    id<input type="text" class="form-control" name="id" value="<?php echo $_GET['id'] ?>" required/>
                  </div>
                  <div class="col-md-6">
                  roll<input type="text" class="form-control" name="rollno" value="<?php echo $_GET['rn'] ?>" required/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    name<input type="text" class="form-control"  name="name" value="<?php echo $_GET['sn'] ?>" required/>
                  </div>
                  <div class="col-md-6">
                    class<select class="form-control" name="class" id="class">
                      <option selected><?php echo $_GET['cl'] ?></option>
                      <option value="Class 10">Class 10</option>
                      <option value="Class 9">Class 9</option>
                      <option value="Class 8">Class 8</option>
                      <option value="Class 7">Class 7</option>
                      <option value="Class 6">Class 6</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                address<input type="text" class="form-control" name="address" value="<?php echo $_GET['ad'] ?>"/>
                  </div>
                <div class="col-md-6">
                religion<select name="religion" class="form-control" id="religion">
                          <option selected><?php echo $_GET['rg'] ?></option>
                          <option value="Islam">Islam</option>
                          <option value="Sanatan">Sanatan</option>
                          <option value="Buddhist">Buddhist</option>
                          <option value="christian">christian</option>
                          <option value="Others">Others</option>
                        </select>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                dateofbirth<input type="date" class="form-control" name="dateofbirth" value="<?php echo $_GET['dob'] ?>"/>
                </div>
                  <div class="col-md-6">
                  gender<select name="gender" class="form-control" id="gender">
                        <option selected><?php echo $_GET['gn'] ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  image<input type="file" name="image" class="form-control" value="<?php $_GET['img'] ?>" ><img src='<?php echo $_GET['img'] ?>' height='50' width='50'/>
                  
                  </div>
                  <div class="col-md-6">
                  guardianmobileno<input type="text" name="guardianmobileno" class="form-control" value="<?php echo $_GET['gmn'] ?>">
                  
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <br><input type="submit" class="btn btn-dark" name="submit" value="submit"/>
                  </div>
                </div>
                
              </form>
  <?php 
  
    if($_POST['submit'])
    {
      $id = $_POST['id'];
      $rn = $_POST['rollno'];
      $sn = $_POST['name'];
      $cl = $_POST['class'];
      $ad = $_POST['address'];
      $rg = $_POST['religion'];
      $dob = $_POST['dateofbirth'];
      $gn = $_POST['gender'];
      $img = $_POST['image'];
      $gmn = $_POST['guardianmobileno'];

      $filename = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "studentpic/".$filename;
      move_uploaded_file($tempname,$folder);

      $query = "UPDATE admission SET rollno='$rn', name='$sn', class='$cl', address='$ad',religion ='$rg', dateofbirth='$dob', gender='$gn', image='$folder', guardianmobileno='$gmn' WHERE id='$id'";
      $data = mysqli_query($conn, $query);
      if($data)
      {
        echo "Record Updated Successfully.<a href='student-info.php'>Check Updated List Here</a>";
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
            <a href="student-info.php"  id="backbtn"><i class="fas fa-arrow-circle-left" style="font-size: 40px;"></i><br>&nbsp; back</a>
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