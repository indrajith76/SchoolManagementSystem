<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM vehicles";
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
                #av{
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
            <!-- side manu -->
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
							<h3>Vehicles Informations</h3>
						</div>
            
						<div class="title_right" id='printbtn'>
							<div class="col-md-3 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
                  <span class="input-group-btn">
                    <button onclick="window.print();" class="btn btn-default" style="border-radius: 25px 25px 25px 25px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;"><i class="fas fa-print"></i> Print</button>
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
									<h2>Information Table</h2>
                  
									<ul class="nav navbar-right panel_toolbox">
                  <li><a href="addvehicles.php" id='av' class="btn btn-default" style="border-radius: 25px 25px 25px 25px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;">Add Vehicles info</a></li>
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
                  <ul class="nav navbar-right panel_toolbox">
							      <!-- <li><a href="addvehicles.php" class="btn btn-default" style="border-radius: 25px 25px 25px 25px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;">Add Vehicles info</a></li> -->
						      </ul>
									<div class="clearfix"></div>
								</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Vehicle no</th>
                      <th scope="col">Reg. No</th>
                      <th scope="col">Brand Name</th>
                      <th scope="col">Color</th>
                      <th scope="col">Date Of Buy</th>
                      <th scope="col">Photo</th>
                      <th class='printbtn'><center>Action</center></th>
                    </tr>
                  </thead>
                 <?php
                  if ($total !=0){
                  ?>
                    <tbody>
                   
                    <?php
                    while($result = mysqli_fetch_assoc($data))
                    {
                        echo "<tr>
                                <td>".$result['vehicleno']."</td>
                                <td>".$result['regno']."</td>
                                <td>".$result['name']."</td>
                                <td>".$result['color']."</td>
                                <td>".$result['dateofbuy']."</td>
                                <td><img src='".$result['image']."' height='50' width='50'/></td>
                                <td class='printbtn'><center><a href='vehiclesinfoupdate.php?vn=$result[vehicleno]&rn=$result[regno]&n=$result[name]&cl=$result[color]&dob=$result[dateofbuy]&img=$result[image]' type='button' class='btn btn-success'><i class='far fa-edit'></i></a>
                                            <a href='vehiclesinfodelete.php?vn=$result[vehicleno]' onclick='return checkdelete()' type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                                    </center></td>
                                
                              </tr>";
                    }
                    }
                    else
                    {
                      echo "<tr>
                      <td colspan='2'>NO records found..!</td>
                      </tr>";
                    }
                     
                    ?>
                    
                  </tbody>
                </table>
								<script>
                  function checkdelete() {
                    return confirm('Are You want to delete this data?');
                  }
                </script>
							</div>
						</div>
					</div>

			<!-- /page content -->

        <!-- footer content -->
        <?php include('footer.php') ?>
  </body>
</html>