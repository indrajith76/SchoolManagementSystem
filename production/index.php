<?php
include("connection.php");
error_reporting(0);

$query1 = "SELECT * FROM employee";
$data1 = mysqli_query($conn, $query1);
$totalemp = mysqli_num_rows($data1);

$query2 = "SELECT * FROM admission";
$data2 = mysqli_query($conn, $query2);
$totalstu = mysqli_num_rows($data2);
// *******************************
$query3 = "SELECT SUM(amount) FROM students_fees_record";
$data3 = mysqli_query($conn, $query3);
$row = mysqli_fetch_array($data3);

$query4 = "SELECT * FROM vehicles";
$data4 = mysqli_query($conn, $query4);
$totalvehi = mysqli_num_rows($data4);


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
            <div class="row" style="display: inline-block;">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users" ></i></div>
                  <div class="count"><?php echo $totalstu; ?></div>
                  <h3>Students</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fas fa-user-tie"></i></div>
                  <div class="count"><?php echo $totalemp; ?></div>
                  <h3>Employee</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fas fa-bus-alt"></i></div>
                  <div class="count"><?php echo $totalvehi; ?></div>
                  <h3>Vehicles</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
                  <div class="count"><?php echo $row['SUM(amount)']; ?></div>
                  <h3>Income</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
            </div>
          </div>
          <h2>Employee Info Table </h2>
          <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Categories</th>
                      <th scope="col">Address</th>
                      <th scope="col">Religion</th>
                      <th scope="col">Date of Birth</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Mobile No</th>
                      </tr>
                  </thead>
                 <?php
                  if ($totalemp !=0){
                  ?>
                    <tbody>
                   
                    <?php
                    while($result = mysqli_fetch_assoc($data1))
                    {
                        echo "<tr>
                                <td>".$result['idno']."</td>
                                <td>".$result['name']."</td>
                                <td>".$result['categories']."</td>
                                <td>".$result['address']."</td>
                                <td>".$result['religion']."</td>
                                <td>".$result['dateofbirth']."</td>
                                <td>".$result['gender']."</td>
                                <td><img src='".$result['image']."' height='50' width='50'/></td>
                                <td>".$result['mobileno']."</td>
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
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            School Management system - Bootstrap Admin Template by <a href="https://colorlib.com">indrajith</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <?php include('footer.php') ?>
</html>