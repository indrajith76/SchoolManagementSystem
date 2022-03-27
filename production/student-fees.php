<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM students_fees_record";
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
                #printbtn1{
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

            <!-- siderbar -->
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
							<h3>Fees Transaction Info</h3>
						</div>

						<div class="title_right" id="printbtn">
							<div class="col-md-4 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
                  <a href="add_students_fees.php" class="btn btn-dark">Add Fees</a>
									<span class="input-group-btn">
                  <button onclick="window.print();" class="btn btn-default" style="border-radius: 5px 5px 5px 5px;border: 1px solid rgba(221,226,232,0.49);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);color: #73879c;background-color: #f7f7f7;"><i class="fas fa-print"></i> Print</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title" id="printbtn1">
									<h2>Details of Students Fees info</h2>
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
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Roll</th>
                      <th scope="col">Name</th>
                      <th scope="col">Class</th>
                      <th scope="col">Fees Type</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Payment Status</th>
                      <th scope="col">Date of Transaction</th>
                      <th scope="col" class="printbtn"><center>Action</center></th>
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
                                <td>".$result['id']."</td>
                                <td>".$result['rollno']."</td>
                                <td>".$result['name']."</td>
                                <td>".$result['class']."</td>
                                <td>".$result['fees_type']."</td>
                                <td>".$result['gender']."</td>
                                <td>".$result['amount']."</td>
                                <td>".$result['payments_status']."</td>
                                <td>".$result['dateoftransaction']."</td>
                                <td class='printbtn'><center><a href='student-fees-update.php?id=$result[id]&rn=$result[rollno]&sn=$result[name]&cl=$result[class]&ft=$result[fees_type]&gn=$result[gender]&amount=$result[amount]&ps=$result[payments_status]&dot=$result[dateoftransaction]' type='button' class='btn btn-success'><i class='far fa-edit'></i></a>
                                            <a href='student-fees-delete.php?id=$result[id]' onclick='return checkdelete()' type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                                    </center></td>
                                
                              </tr>";
                    }
                    }
                    else
                    {
                      echo "<tr>
                      <td>NO records found..!</td>
                      </tr>";
                    }
                     
                    ?>
                </table>
								
							</div>
						</div>
					</div>
          
          
			<!-- /page content -->

        <!-- footer content -->
        <?php include('footer.php') ?>
  </body>
</html>