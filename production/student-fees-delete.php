<?php include('connection.php');
error_reporting(0);

$id = $_GET['id'];
$query = "DELETE FROM students_fees_record WHERE id='$id'";
$data = mysqli_query($conn, $query);

if($data)
{
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/student-fees.php">
<?php
}
?>
