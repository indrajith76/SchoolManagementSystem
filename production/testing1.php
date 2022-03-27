<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Search Testing 1</title>
  </head>
  <body>
      <div id="filters">
          <select name="fetchval" id="fetchval">
              <option value="" disabled="" selected="">Select Class</option>
              <option value="Class 6">Class 6</option>
              <option value="Class 7">Class 7</option>
          </select>
      </div>
      <div class="container">
          <table class="table">
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
              </thead>
              <tbody>
                  <?php
                  $query = "SELECT * FROM class_routine";
                  $r = mysqli_query($conn,$query);
                  while ($row = mysqli_fetch_assoc($r)) { ?>
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
      </div>
      <script type="text/javascript">
          $(document).ready(function(){
              $("#fetchval").on('change',function(){
                  var value = $(this).val();
                //   alert(value);

                $.ajax({
                    url:"fetch.php",
                    type:"POST",
                    data: 'request='+ value;
                    beforeSend:function(){
                        $(".container").html("<span>Working....</span>");
                    }
                    success:function(data){
                        $(".container").html(data);
                    }
                });
              });
          });
      </script>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>