<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM admission";
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

                .print-container, #butn * {
                  visibility: hidden;
                }

                .print-container, #butn1 ul * {
                  visibility: hidden;
                }

                #a * {
                  visibility: hidden;
                }
                #a1 * {
                  visibility: hidden;
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
							<h3>Student Informations</h3>
						</div>
            
						<div class="title_right" id="butn">
							<div class="col-md-3 col-sm-3  form-group pull-right">
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
								<div class="x_title" id='butn1'>
									<h2>Information Table</h2>
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
                      <th scope="col">ID No</th>
                      <th scope="col">Roll No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Class</th>
                      <th scope="col">Address</th>
                      <th scope="col">Religion</th>
                      <th scope="col">Date of Birth</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Guardian MobileNo</th>
                      <th colspan="2" id="a1"><center>Action</center></th>
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
                                <td>".$result['address']."</td>
                                <td>".$result['religion']."</td>
                                <td>".$result['dateofbirth']."</td>
                                <td>".$result['gender']."</td>
                                <td><img src='".$result['image']."' height='50' width='50'/></td>
                                <td>".$result['guardianmobileno']."</td>
                                <td id='a'><center><a href='student-info-update.php?id=$result[id]&rn=$result[rollno]&sn=$result[name]&cl=$result[class]&ad=$result[address]&rg=$result[religion]&dob=$result[dateofbirth]&gn=$result[gender]&img=$result[image]&gmn=$result[guardianmobileno]' type='button' class='btn btn-success'><i class='far fa-edit'></i></a>
                                            <a href='student-info-delete.php?id=$result[id]' onclick='return checkdelete()' type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                                            <a href='student-info-view.php?id=$result[id]&rn=$result[rollno]&sn=$result[name]&cl=$result[class]&ad=$result[address]&rg=$result[religion]&dob=$result[dateofbirth]&gn=$result[gender]&img=$result[image]&gmn=$result[guardianmobileno]' type='button' class='btn btn-light'>View</a>
                                    </center></td>
                                
                              </tr>";
                    }
                    }
                    else
                    {
                      echo "<tr>
                      <td colspan='2'>NO records found..!</td>
                      </tr>";
                    }echo $result['rollno']."".$result['name'];
                     
                    ?>
                    
                  </tbody>
                </table>
                
                
                  <!-- <li class="active"><a>1</a></li> -->
                  
                
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