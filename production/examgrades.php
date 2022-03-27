<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM examgrades";
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
                #printbtn{
                  display: none;
                }
                #dga{
                  display: none;
                }
                .printbtn{
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
							<h3>Exam Result</h3>
						</div>

						<div class="title_right" id="printbtn">
							<div class="col-md-8 col-sm-6  form-group pull-right top_search">
                <form action="" method="post">
                  <div class="input-group col-md-12">
                    <select name="filter_value" class="form-control" id="filter_value">
                      <option value="" disabled="" selected="">Select Class</option>
                      <option value="">View all Results</option>
                      <option value="Class 6">Class 6</option>
                      <option value="Class 7">Class 7</option>
                      <option value="Class 8">Class 8</option>
                      <option value="Class 9">Class 9</option>
                      <option value="Class 10">Class 10</option>
                    </select>
                    <span class="input-group-btn">
                      <button type="submit" name="filter_btn" class="btn btn-default">Find Result</button>
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
									<h2>Exam Results Table</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a href="examgradesadd.php" id='dga' class="btn btn-default" style="border-radius: 25px 25px 25px 25px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;">Add Results</a></li>
									</ul>
									<div class="clearfix"></div>
								</div>
                <div class="table-responsive">
                <table class="table">
                                <thead>
                                    <tr>
                                    <th>Roll</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Promotion Class</th>
                                    <th>Result</th>
                                    <th>Grade</th>
                                    <th class='printbtn'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("connection.php");
                                    if(isset($_POST['filter_btn']))
                                    {
                                        $value_filter = $_POST['filter_value'];
                                        $query = "SELECT * FROM examgrades WHERE CONCAT(class) LIKE '%$value_filter%'";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            while ($row = mysqli_fetch_assoc($query_run))
                                            {
                                              
                                              echo "<tr>
                                              <td>".$row['rollno']."</td>
                                              <td>".$row['name']."</td>
                                              <td>".$row['class']."</td>
                                              <td>".$row['promocls']."</td>
                                              <td>".$row['result']."</td>
                                              <td>".$row['grade']."</td>
                                              <td class='printbtn'><center>
                                              <a href='examgradesdelete.php?slno=$row[slno]' onclick='return checkdelete()' type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
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
                                    <!-- <a href='routine-info-update.php?slno=$row[serial_no]&d=$row[day]&fc=$row[first_class]&sc=$row[second_class]&tc=$row[third_class]&lb=$row[lunch_break]&fourc=$row[fourth_class]&fifc=$row[fifth_class]&sixc=$row[sixth_class]&cn=$row[classname]' type='button' class='btn btn-success'><i class='far fa-edit'></i></a> -->
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