<?php include('connection.php');
error_reporting(0);
$query = "SELECT * FROM class_routine";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$_GET['slno'];
$_GET['d'];
$_GET['fc'];
$_GET['sc'];
$_GET['tc'];
$_GET['lb'];
$_GET['fourc'];
$_GET['fifc'];
$_GET['sixc'];
$_GET['cn'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shyamoli ideal polytechnic institute</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fas fa-university"></i> <span>Shyamoli ideal.. polytechnic institute</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="#"><i class="fa fa-home"></i> Students<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="students_addmission.php">Student Addmission</a></li>
                      <li><a href="student-info.php">Students info</a></li>
                      <li><a href="student-fees.php"> Students Fee</a></li>
                    </ul>    
                  </li>
                  
                  <li><a href="#"><i class="fa fa-home"></i> Class<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="clssix.php">Class 6</a></li>
                      <li><a href="clssvn.php">Class 7</a></li>
                      <li><a href="clseight.php">Class 8</a></li>
                      <li><a href="clsnine.php">Class 9</a></li>
                      <li><a href="clsten.php">Class 10</a></li>
                    </ul>                  
                  </li>
                  <li><a href="#"><i class="fa fa-home"></i> Employee Info<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="addemployee.php">Add Employee</a></li>
                      <li><a href="employee_list.php">Employee List</a></li>
                      <li><a href="addemployeesalary.php">Add Employee Salary</a></li>
                      <li><a href="principle.php">Principle</a></li>
                      <li><a href="techerinfo.php">Techers</a></li>
                      <li><a href="otherinfo.php">Other</a></li>
                    </ul>                  
                  </li>
                  <li><a href="#"><i class="fa fa-home"></i>Employee Salary Sheet<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                        <li><a href="january.php">January</a></li>
                        <li><a href="february.php">February</a></li>
                        <li><a href="march.php">March</a></li>
                        <li><a href="april.php">April</a></li>
                        <li><a href="may.php">May</a></li>
                        <li><a href="june.php">June</a></li>
                        <li><a href="july.php">July</a></li>
                        <li><a href="august.php">August</a></li>
                        <li><a href="september.php">September</a></li>
                        <li><a href="october.php">October</a></li>
                        <li><a href="november.php">November</a></li>
                        <li><a href="december.php">December</a></li>
                      </ul>                 
                  </li>
                  <li><a href="classroutine.php"><i class="fa fa-home"></i> Class Routine</a>                  
                  </li>
                  <li><a href="#"><i class="fa fa-home"></i> Exam<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Exam Schedule</a></li>
                      <li><a href="#">Exam Grades</a></li>
                    </ul>                  
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Update Routine Entry</h3>
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
									<h2>Routine Entry Form</h2>
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
                <form action="" method="POST">
                <div class="row">
                  <div class="col-md-6">
                  Day<select name="day" class="form-control">
                        <option selected><?php echo $_GET['d'] ?></option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                  First Class<input type="text" class="form-control" name="first_class" value="<?php echo $_GET['fc'] ?>" required/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  Second Class<input type="text" class="form-control"  name="second_class" value="<?php echo $_GET['sc'] ?>" required/>
                  </div>
                  <div class="col-md-6">
                  Third Class<input type="text" class="form-control"  name="third_class" value="<?php echo $_GET['tc'] ?>" required/>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                Lunch Break<select name="lunch_break" class="form-control">
                          <option selected><?php echo $_GET['lb'] ?></option>
                          <option value="No Break">No Break</option>
                          <option value="1-HOUR Break">1-HOUR Break</option>
                          <option value="30-Minitue Break">30-Minitue Break</option>
                          </select>
                  </div>
                <div class="col-md-6">
                Fourth Class<input type="text" class="form-control"  name="fourth_class" value="<?php echo $_GET['fourc'] ?>" required/>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                Fifth Class<input type="text" class="form-control" name="fifth_class" value="<?php echo $_GET['fifc'] ?>"/>
                </div>
                  <div class="col-md-6">
                  Sixth Class<input type="text" class="form-control"  name="sixth_class" value="<?php echo $_GET['sixc'] ?>" required/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  Class Name<select name="classname" class="form-control">
                              <option selected><?php echo $_GET['cn'] ?></option>
                              <option value="Class 6">Class 6</option>
                              <option value="Class 7">Class 7</option>
                              <option value="Class 8">Class 8</option>
                              <option value="Class 9">Class 9</option>
                              <option value="Class 10">Class 10</option>
                            </select><br>
                    <input type="submit" class="btn btn-dark" name="submit" value="Add To Routine"/>
                  </div>
                </div>
                
              </form>
  <?php 
  
    if($_POST['submit'])
    {
      $slno = $_POST['serial_no'];
      $day = $_POST['day'];
      $first_class = $_POST['first_class'];
      $second_class = $_POST['second_class'];
      $third_class = $_POST['third_class'];
      $lunch_break = $_POST['lunch_break'];
      $fourth_class = $_POST['fourth_class'];
      $fifth_class = $_POST['fifth_class'];
      $sixth_class = $_POST['sixth_class'];
      $classname = $_POST['classname'];

      $query = "UPDATE class_routine SET day='$day', first_class='$first_class', second_class='$second_class', third_class='$third_class',lunch_break ='$lunch_break', fourth_class='$fourth_class', fifth_class='$fifth_class', sixth_class='$sixth_class', classname='$classname' WHERE serial_no='$slno'";
      $data = mysqli_query($conn, $query);
      if($data)
      {
        echo "Record Updated Successfully.<a href='classroutine.php'>Check Updated List Here</a>";
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
            <a href="classroutine.php"  id="backbtn"><i class="fas fa-arrow-circle-left" style="font-size: 40px;"></i><br>&nbsp; back</a>
          </div>
          <style>
            #backbtn {
              position: relative;
              left: 92%;
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
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
  </body>

</html>