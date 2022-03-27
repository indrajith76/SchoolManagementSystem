<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM exam_schedule";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
 
 



?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php') ?>
          <style>
              @media print{
                body * {
                  visibility: hidden;
                }
                #printbtn {
                  display: none;
                }
                .printbtn{
                  display: none;
                }
                #ads{
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

            <!-- side bar -->
            <?php include('sidebar.php') ?>
          </div>
        </div>

        <!-- top navigation -->
        <?php include('topnav.php') ?>
        <!-- /top navigation -->

        
			<!-- page content -->
			<div class="right_col print-container" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Exam Schedule</h3>
						</div>

						<div class="title_right" id='printbtn'>
							<div class="col-md-8 col-sm-6  form-group pull-right top_search">
                <form action="" method="post">
                  <div class="input-group col-md-12">
                    <select name="filter_value" class="form-control" id="filter_value">
                      <option value="" disabled="" selected="">Select Class</option>
                      <option value="">View all Exam Schedule</option>
                      <option value="Class 6">Class 6</option>
                      <option value="Class 7">Class 7</option>
                      <option value="Class 8">Class 8</option>
                      <option value="Class 9">Class 9</option>
                      <option value="Class 10">Class 10</option>
                    </select>
                    <span class="input-group-btn">
                      <button type="submit" name="filter_btn" class="btn btn-default">Find Schedule</button>
									  </span>
                    <span class="input-group-btn">
                    <button onclick="window.print();" class="btn btn-default" style="border-radius: 25px 25px 25px 25px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;"><i class="fas fa-print"></i> Print</button>
                    </span>
                  </div>
                  </form>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Exam Schedule Table</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a href="exam_schedule_add.php" id='ads' class="btn btn-default" style="border-radius: 25px 25px 25px 25px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;">Add Schedule</a></li>
									</ul>
									<div class="clearfix"></div>
								</div>
                <div class="table-responsive">
                <table class="table">
                                <thead>
                                    <tr>
                                    <th>Exam Name</th>
                                    <th>Subject Name</th>
                                    <th>Class</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th class='printbtn'><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("connection.php");
                                    if(isset($_POST['filter_btn']))
                                    {
                                        $value_filter = $_POST['filter_value'];
                                        $query = "SELECT * FROM exam_schedule WHERE CONCAT(class) LIKE '%$value_filter%'";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            while ($row = mysqli_fetch_assoc($query_run))
                                            {
                                              
                                              echo "<tr>
                                              <td>".$row['examname']."</td>
                                              <td>".$row['subname']."</td>
                                              <td>".$row['class']."</td>
                                              <td>".$row['time']."</td>
                                              <td>".$row['date']."</td>
                                              <td class='printbtn'><center>
                                              <a href='exam_schedule_update.php?en=$row[examname]&sn=$row[subname]&cl=$row[class]&t=$row[time]&d=$row[date]' type='button' class='btn btn-success'><i class='far fa-edit'></i></a>
                                              <a href='exam_schedule_delete.php?slno=$row[slno]' onclick='return checkdelete()' type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                                      </center></td>
                                              </tr>";
                                            ?> 
                                            <?php
                                                
                                            }
                                        }
                                        else
                                        {
                                            echo "<tr><td colspan='2'>No Record found.!</td></tr>";
                                        }
                                    }
                                    ?>
                                    
                                </tbody>
                                <script>
                                  function checkdelete() {
                                    return confirm('Are You want to delete this data?');
                                  }
                                </script>
                            </table>
                </div>
								
							</div>
						</div>
					</div>

			<!-- /page content -->

        <!-- footer content -->
        <?php include('footer.php') ?>
  </body>
</html>