<?php include('connection.php');
error_reporting(0);

$id = $_GET['id'];
$query = "DELETE FROM employee WHERE idno='$id'";
$data = mysqli_query($conn, $query);

if($data)
{
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/employee_list.php">
<?php
}
?>
