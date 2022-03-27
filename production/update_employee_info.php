<?php include('connection.php');
error_reporting(0);
$query = "SELECT * FROM employee";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$_GET['id'];
$_GET['en'];
$_GET['cg'];
$_GET['ad'];
$_GET['rg'];
$_GET['dob'];
$_GET['gn'];
$_GET['img'];
$_GET['mn'];

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

            <!-- Sidebar -->
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
							<h3>Update Employee Informations</h3>
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
									<h2>Update Info Entry Form </h2>
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
                      ID No<input type="text" class="form-control" name="idno" value="<?php echo $_GET['id']; ?>" required/>
                    </div>
                    <div class="col-md-6">
                      Name<input type="text" class="form-control" name="name" value="<?php echo $_GET['en']; ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      Categories<select name="categories" class="form-control" id="categories">
                      <option selected><?php echo $_GET['cg']; ?></option>
                      <option value="Principle">Principle</option>
                      <option value="Techer">Techer</option>
                      <option value="Others">Others</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                      Address<input type="text" class="form-control" name="address" value="<?php echo $_GET['ad']; ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      Religion<select name="religion" class="form-control" id="religion">
                          <option selected><?php echo $_GET['rg']; ?></option>
                          <option value="Islam">Islam</option>
                          <option value="Sanatan">Sanatan</option>
                          <option value="Buddhist">Buddhist</option>
                          <option value="christian">christian</option>
                          <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      Date Of Birth<input type="date" class="form-control" name="dateofbirth" value="<?php echo $_GET['dob']; ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      Gender<select name="gender" class="form-control" id="gender">
                          <option selected><?php echo $_GET['gn']; ?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                      Image<input type="file" class="form-control" name="image" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      Mobile Number<input type="text" class="form-control" name="mobileno" value="<?php echo $_GET['mn']; ?>" required/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6"><br>
                      <input type="submit" class="btn btn-dark" name="submit" value="submit"/>
                    </div>
                  </div>
              </form>
  <?php 
  
    if($_POST['submit'])
    {
      $idno = $_POST['idno'];
      $name = $_POST['name'];
      $categories = $_POST['categories'];
      $address = $_POST['address'];
      $religion = $_POST['religion'];
      $dateofbirth = $_POST['dateofbirth'];
      $gender = $_POST['gender'];
      $image = $_POST['image'];
      $mobileno = $_POST['mobileno'];

      $filename = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "employeePic/".$filename;
      move_uploaded_file($tempname,$folder);
      

      $query = "UPDATE employee SET name='$name', categories='$categories', address='$address', religion='$religion', dateofbirth='$dateofbirth',gender ='$gender', image='$folder',mobileno='$mobileno' WHERE idno='$idno'";
      $data = mysqli_query($conn, $query);
      if($data)
      {
        echo "<script>alert('Record Updated Successfully')</script>";
        ?>
          <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/employee_list.php">
        <?php
        echo "Record Updated Successfully";
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
            <a href="student-info.php"  id="backbtn"><i class="fas fa-arrow-circle-left" style="font-size: 40px;"></i><br><span>back to student info</span></a>
          </div>
          <style>
            #backbtn {
              position: relative;
              left: 92%;
            }
            #backbtn span{
              position: relative;
              right: 3%;
            }
          </style>
			<!-- /page content -->

        <!-- footer content -->
        <?php include('footer.php') ?>
    
  </body>

</html>