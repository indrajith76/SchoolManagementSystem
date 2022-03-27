
<?php 
    include('connection.php');
    error_reporting(0);

    $vn = $_POST['vehicleno'];
    $rn = $_POST['regno'];
    $n = $_POST['name'];
    $cl = $_POST['color'];
    $dob = $_POST['dateofbuy'];
    $img = $_POST['image'];
    $_POST['submit'];

    
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "vehicles/".$filename;
    move_uploaded_file($tempname,$folder);
    
    
    $query = "INSERT INTO vehicles VALUES ('$vn','$rn','$n','$cl','$dob','$folder')";
    $data = mysqli_query($conn,$query);

    if($data){
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/vehiclesinfo.php">
        <?php
    }
    // else{
    //   echo "Data not inserted!";
    //  
    //   <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/students_addmission.php">
    
    // }


  ?>