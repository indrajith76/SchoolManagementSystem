

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

            <!-- side bar  -->
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
							<h3>Class Routine Entry</h3>
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
                <form action="class_routine_insert.php" method="POST">
                <div class="row">
                  <div class="col-md-6">
                  Day<select name="day" class="form-control">
                        <option disabled="" selected="">Select The Day</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                  First Class<input type="text" class="form-control" name="first_class" value="" required/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  Second Class<input type="text" class="form-control"  name="second_class" value="" required/>
                  </div>
                  <div class="col-md-6">
                  Third Class<input type="text" class="form-control"  name="third_class" value="" required/>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                Lunch Break<select name="lunch_break" class="form-control">
                          <option disabled="" selected="">Select Break Time</option>
                          <option value="No Break">No Break</option>
                          <option value="1-HOUR Break">1-HOUR Break</option>
                          <option value="30-Minitue Break">30-Minitue Break</option>
                          </select>
                  </div>
                <div class="col-md-6">
                Fourth Class<input type="text" class="form-control"  name="fourth_class" value="" />
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                Fifth Class<input type="text" class="form-control" name="fifth_class" value=""/>
                </div>
                  <div class="col-md-6">
                  Sixth Class<input type="text" class="form-control"  name="sixth_class" value="" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  Class Name<select name="classname" class="form-control">
                              <option disabled="" selected="">Select The Class</option>
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
        <?php include('footer.php') ?>
    
  </body>

</html>