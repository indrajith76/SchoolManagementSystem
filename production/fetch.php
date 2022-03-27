<?php
include("connection.php");
if(isset($_POST['request'])){
    $request = $_POST['request'];

    $query = "SELECT * FROM class_routine WHERE classname='$request'";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);

?>

<table class="table">
    <?php
    if($count){

     ?>
    <thead>
        <tr>
            <th>Day</th>
            <th>First Class</th>
            <th>Second Class</th>
            <th>Third Class</th>
            <th>Lunch Break</th>
            <th>Fourth Class</th>
            <th>Fifth Class</th>
            <th>Sixth Class</th>
            <th>Class Name</th>
        </tr>
        <?php
        }else{
            echo "Sorry! No record found";
        }?>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
           <td><?php echo $row['day'] ?></td>
            <td><?php echo $row['first_class'] ?></td>
            <td><?php echo $row['second_class'] ?></td>
            <td><?php echo $row['third_class'] ?></td>
            <td><?php echo $row['lunch_break'] ?></td>
            <td><?php echo $row['fourth_class'] ?></td>
            <td><?php echo $row['fifth_class'] ?></td>
            <td><?php echo $row['sixth_class'] ?></td>
            <td><?php echo $row['classname'] ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
    }
?>