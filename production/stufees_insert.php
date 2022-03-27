
<?php 
    include('connection.php');
    error_reporting(0);

    $sln = $_POST['slno'];
    $id = $_POST['id'];
    $rn = $_POST['rollno'];
    $sn = $_POST['name'];
    $cl = $_POST['class'];
    $ft = $_POST['fees_type'];
    $gn = $_POST['gender'];
    $amount = $_POST['amount'];
    $ps = $_POST['payments_status'];
    $dot = $_POST['dateoftransaction'];
    $_POST['submit'];
    
    $query = "INSERT INTO students_fees_record VALUES ('$sln','$id','$rn','$sn','$cl','$ft','$gn','$amount','$ps','$dot')";
    $data = mysqli_query($conn,$query);

    if($data){
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/add_students_fees.php">
        <?php
    }
    // else{
    //   echo "Data not inserted!";
    //  
    //   <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/students_addmission.php">
    
    // }


  ?>