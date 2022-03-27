
<?php 
    include('connection.php');
    error_reporting(0);

    $slno = $_POST['slno'];
    $rn = $_POST['rollno'];
    $sn = $_POST['name'];
    $cl = $_POST['class'];
    $pc = $_POST['promocls'];
    $r = $_POST['result'];
    $g = $_POST['grade'];
    $_POST['submit'];
    
    $query = "INSERT INTO examgrades VALUES ('$slno','$rn','$sn','$cl','$pc','$r','$g')";
    $data = mysqli_query($conn,$query);

    if($data){
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/examgradesadd.php">
        <?php
    }
    // else{
    //   echo "Data not inserted!";
    //  
    //   <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/students_addmission.php">
    
    // }


  ?>