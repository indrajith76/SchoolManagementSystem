<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM admission WHERE class ='Class 10'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
        <style>
              .dropbtn {
                background-color: #2a3f54;
                color: white;
                padding: 7px;
                font-size: 16px;
                border: none;
                cursor: pointer;
              }

              .dropbtn:hover, .dropbtn:focus {
                background-color: #2980B9;
              }

              .dropdown {
                position: relative;
                display: inline-block;
              }

              .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                overflow: auto;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
              }

              .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
              }

              .dropdown a:hover {background-color: #84949f;}

              .show {display: block;}
          </style>
          <style>
              @media print{
                body * {
                  visibility: hidden;
                }
                #printbtn{
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

            <!-- sidebar -->
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
							<h3>Informations of Class-10 Students</h3>
						</div>

						<div class="title_right" id="printbtn">
							<div class="col-md-5 col-sm-5  form-group pull-right">
								<div class="input-group">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Select Class <span class="fa fa-chevron-down"></span></button>
                    <div id="myDropdown" class="dropdown-content">
                      <a href="clssix.php">Class 6</a>
                      <a href="clssvn.php">Class 7</a>
                      <a href="clseight.php">Class 8</a>
                      <a href="clsnine.php">Class 9</a>
                      <a href="clsten.php">Class 10</a>
                    </div>
                  </div>
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
								<div class="x_title">
									<h2>Students Details</h2>
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
                      <th scope="col">Address</th>
                      <th scope="col">Religion</th>
                      <th scope="col">Date of Birth</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Photo</th>
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
                              </tr>";
                    }
                    }
                    else
                    {
                      echo "<tr>
                      <td colspan='2'>NO records found!</td>
                      </tr>";
                    }echo $result['rollno']."".$result['name'];
                     
                    ?>
                    
                  </tbody>
                </table>
								
							</div>
						</div>
					</div>

			<!-- /page content -->
      <script>
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
  </script>
        <!-- footer content -->
        <?php include('footer.php') ?>
  </body>
</html>