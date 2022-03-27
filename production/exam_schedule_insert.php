
<?php 
    include('connection.php');
    error_reporting(0);

    $slno = $_POST['serial_no'];
    $en = $_POST['examname'];
    $sn = $_POST['subname'];
    $cl = $_POST['class'];
    $t = $_POST['time'];
    $d = $_POST['date'];
    $_POST['submit'];
    
    $query = "INSERT INTO exam_schedule VALUES ('$slno','$en','$sn','$cl','$t','$d')";
    $data = mysqli_query($conn,$query);

    if($data){
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/examschedule.php">
        <?php
    }
    // else{
    //   echo "Data not inserted!";
    //  
    //   <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/students_addmission.php">
    
    // }


  ?>