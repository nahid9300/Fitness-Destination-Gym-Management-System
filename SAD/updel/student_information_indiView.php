<?php
$Stu_id=$_GET['Stu_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM student_information WHERE Stu_id=$Stu_id";
$query=mysqli_query($con, $sql);
$student_information=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Student info</title>
  </head>
  <body>
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-2">
          <br>
          <a href="student_information_view.php" class="btn btn-success">Back</a>
        </div>
        <div class="col-md-8">
          
          <h1>Student information</h1>
          <table class="table">
            <tr>
              <th class="text-right">ID:</th>
              <td><?php echo $student_information['Stu_id'];?></td>
            </tr>
            <tr>
              <th class="text-right">Student name:</th>
              <td><?php echo $student_information['Student_name'];?></td>
            </tr>
            <tr>
              <th class="text-right">Fathers name:</th>
              <td><?php echo $student_information['Fathers_name'];?></td>
            </tr>
            <tr>
              <th class="text-right">Date of birth:</th>
              <td><?php echo $student_information['Date_of_Birth'];?></td>
            </tr>
            <tr>
              <th class="text-right">Sex:</th>
              <td><?php echo $student_information['Sex'];?></td>
            </tr>
            <tr>
              <th class="text-right">Martial status:</th>
              <td><?php echo $student_information['Martial_status'];?></td>
            </tr>
            <tr>
              <th class="text-right">Surgery:</th>
              <td><?php echo $student_information['Surgery'];?></td>
            </tr>
            <tr>
              <th class="text-right">Health:</th>
              <td><?php echo $student_information['Health'];?></td>
            </tr>
            <tr>
              <th class="text-right">Joining date:</th>
              <td><?php echo $student_information['Joining_date'];?></td>
            </tr>
            <tr>
              <th class="text-right">Exit date:</th>
              <td><?php echo $student_information['Exit_date'];?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>