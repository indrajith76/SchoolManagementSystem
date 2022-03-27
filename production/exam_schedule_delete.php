<?php include('connection.php');
error_reporting(0);

$serial_no = $_GET['slno'];
$query = "DELETE FROM exam_schedule WHERE slno='$serial_no'";
$data = mysqli_query($conn, $query);

if($data)
{
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/examschedule.php">
<?php
}
?>
