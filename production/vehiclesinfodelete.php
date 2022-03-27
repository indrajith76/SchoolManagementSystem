<?php include('connection.php');
error_reporting(0);

$vn = $_GET['vn'];
$query = "DELETE FROM vehicles WHERE vehicleno='$vn'";
$data = mysqli_query($conn, $query);

if($data)
{
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/vehiclesinfo.php">
<?php
}
?>
