<?php include('connection.php');
error_reporting(0);

$serial_no = $_GET['slno'];
$query = "DELETE FROM class_routine WHERE serial_no='$serial_no'";
$data = mysqli_query($conn, $query);

if($data)
{
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/classroutine.php">
<?php
}
?>
