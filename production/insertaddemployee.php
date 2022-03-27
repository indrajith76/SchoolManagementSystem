<?php include('connection.php');
error_reporting(0);

    $id = $_POST['idno'];
    $en = $_POST['name'];
    $cg = $_POST['categories'];
    $ad = $_POST['address'];
    $rg = $_POST['religion'];
    $dob = $_POST['dateofbirth'];
    $gn = $_POST['gender'];
    $img = $_POST['image'];
    $mbno = $_POST['mobileno'];
    $_POST['submit'];
    
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "studentpic/".$filename;
    move_uploaded_file($tempname,$folder);
    

    $query = "INSERT INTO employee VALUES ('$id','$en','$cg','$ad','$rg','$dob','$gn','$folder','$mbno')";
    $data = mysqli_query($conn,$query);

    if($data){
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/addemployee.php">
      <?php
  }


  ?>
  