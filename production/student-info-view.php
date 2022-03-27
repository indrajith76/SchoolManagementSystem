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
  <style>
     @media print{
       body * {
          visibility: hidden;
          }

          .printbtn {
              display: none;
          }
          #dpd {
              display: none;
          }

          #backbtn {
              display: none;
          }
       .print-container, .print-container * {
          visibility: visible;
          }
        }
    </style>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fas fa-university"></i> <span>Shyamoli ideal.. polytechnic institute</span></a>
            </div>

            <div class="clearfix"></div>
            <?php include('sidebar.php') ?>
          </div>
        </div>

        <!-- top navigation -->
        <?php include('topnav.php') ?>

        
			<!-- page content -->
			<div class="right_col print-container" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Student Info</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control printbtn" placeholder="Search for...">
									<span class="input-group-btn printbtn">
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
									<h2>Student Details</h2>
									<ul class="nav navbar-right panel_toolbox" id="dpd">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown" >
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close printbtn"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
                <div class="container emp-profile">
                  <form method="post">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="profile-img">
                                  <img src="<?php echo $_GET['img'] ?>" class="img-fluid" alt=""/>
                                  <style>
                                      .profile-img{
                                            text-align: center;
                                        }
                                        .profile-img img{
                                            width: 50%;
                                            height: 50%;
                                        }
                                  </style>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="profile-head">
                                          <h5>
                                              <?php echo $_GET['sn']; ?>
                                          </h5>
                                          <h6>
                                              Student of <?php echo $_GET['cl']; ?>
                                          </h6>
                                          <p class="proile-rating">Roll No : <span><?php echo $_GET['rn']; ?></span></p>
                                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                      <li class="nav-item">
                                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-2">
                          <button onclick="window.print();" class="btn btn-default printbtn" style="border-radius: 5px 5px 5px 5px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;"><i class="fas fa-print"></i> Print</button>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-8">
                              <div class="tab-content profile-tab" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <h6>Id No</h6>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h6>:</h6>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <h6><?php echo $_GET['id']; ?></h6>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <h6>Name</h6>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h6>:</h6>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <h6><?php echo $_GET['sn']; ?></p>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <h6>Address</h6>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h6>:</h6>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <h6><?php echo $_GET['ad']; ?></p>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <h6>Religion</h6>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h6>:</h6>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <h6><?php echo $_GET['rg']; ?></p>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <h6>Date Of Birth</h6>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h6>:</h6>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <h6><?php echo $_GET['dob']; ?></p>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <h6>Gender</h6>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h6>:</h6>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <h6><?php echo $_GET['gn']; ?></p>
                                                  </div>
                                              </div>
                                  </div>
                            </div>
                        </div>
                    </form>           
                </div>
							</div>
						</div>
					</div>
          <div>
            <a href="student-info.php"  id="backbtn"><i class="fas fa-arrow-circle-left" style="font-size: 40px;"></i><br>&nbsp; back</a>
          </div>
          <style>
            #backbtn {
              position: relative;
              left: 1000px;
            }
          </style>
			<!-- /page content -->

        <!-- footer content -->
        <!-- <footer>
          <div class="pull-right">
            School Management system - Bootstrap Admin Template by <a href="https://colorlib.com">indrajith</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
       <?php include('footer.php') ?>
    
  </body>

</html>