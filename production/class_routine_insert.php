
<?php 
    include('connection.php');
    error_reporting(0);

    $slno = $_POST['serial_no'];
    $day = $_POST['day'];
    $first_class = $_POST['first_class'];
    $second_class = $_POST['second_class'];
    $third_class = $_POST['third_class'];
    $lunch_break = $_POST['lunch_break'];
    $fourth_class = $_POST['fourth_class'];
    $fifth_class = $_POST['fifth_class'];
    $sixth_class = $_POST['sixth_class'];
    $classname = $_POST['classname'];
    $_POST['submit'];
    
    $query = "INSERT INTO class_routine VALUES ('$slno','$day','$first_class','$second_class','$third_class','$lunch_break','$fourth_class','$fifth_class','$sixth_class','$classname')";
    $data = mysqli_query($conn,$query);

    if($data){
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/classroutine.php">
        <?php
    }
    // else{
    //   echo "Data not inserted!";
    //  
    //   <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/students_addmission.php">
    
    // }


  ?>