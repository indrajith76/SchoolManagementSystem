
<?php 
    include('connection.php');
    error_reporting(0);

    $id = $_POST['id'];
    $rn = $_POST['rollno'];
    $sn = $_POST['name'];
    $cl = $_POST['class'];
    $ad = $_POST['address'];
    $rg = $_POST['religion'];
    $dob = $_POST['dateofbirth'];
    $gn = $_POST['gender'];
    $img = $_POST['image'];
    $gnm = $_POST['guardianmobileno'];
    $_POST['submit'];

    
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "studentpic/".$filename;
    move_uploaded_file($tempname,$folder);
    
    
    $squery = mysqli_query($conn,"SELECT * FROM `admission` WHERE id='$id'");

    if(mysqli_num_rows($squery)>0)
    {
      ++$id;
    }
    else
    {
      
      $query;
    }
    
    $query = "INSERT INTO admission VALUES ('$id','$rn','$sn','$cl','$ad','$rg','$dob','$gn','$folder','$gnm')";
    $data = mysqli_query($conn,$query);

    if($data){
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/students_addmission.php">
        <?php
    }
    // else{
    //   echo "Data not inserted!";
    //  
    //   <META HTTP-EQUIV="Refresh" CONTENT="0; URL =http://localhost/gentelella-master/production/students_addmission.php">
    
    // }


  ?>