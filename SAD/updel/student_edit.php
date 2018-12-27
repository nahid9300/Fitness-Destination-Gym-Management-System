<?php
$Stu_id=$_GET['Stu_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM student_information WHERE Stu_id=$Stu_id";
$result=mysqli_query($con, $sql);
$student_information=mysqli_fetch_assoc($result);

if(isset($_POST['Student_name'])){
$Student_name=$_POST['Student_name'];
$Fathers_name=$_POST['Fathers_name'];
$Date_of_Birth=$_POST['Date_of_Birth'];
$Sex=$_POST['Sex'];
$Martial_status=$_POST['Martial_status'];
$Surgery=$_POST['Surgery'];
$Health=$_POST['Health'];
$Joining_date=$_POST['Joining_date'];
$Exit_date=$_POST['Exit_date'];

$sql="UPDATE student_information SET Student_name='$Student_name',Fathers_name='$Fathers_name',Date_of_Birth='$Date_of_Birth', Sex='$Sex', Martial_status='$Martial_status', Surgery='$Surgery', Health='$Health', Joining_date='$Joining_date', Exit_date='$Exit_date' WHERE Stu_id=$Stu_id";
mysqli_query($con, $sql);
header('Location:student_information_indiView.php?Stu_id='.$Stu_id);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>physique_information_Update</title>
  </head>
  <body>
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-2">
          <br>
          <a href="student_information_view.php" class="btn btn-success">Back</a>
        </div>
        <div class="col-md-8">
          
          <h1>Student information update</h1>
          <table class="table">
            <form action="" method="POST">
            <tr>
              <th class="text-right">Student name:</th>
              <td>
                <input type="varchar" name="Student_name" value="<?php echo $student_information['Student_name']?>" class="form-control">
              </td>
            </tr>
            <tr>
              <th class="text-right">Fathers_name:</th>
              <td><input type="varchar" name="Fathers_name" value="<?php echo $student_information['Fathers_name']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Date_of_Birth</th>
              <td><input type="Date" name="Date_of_Birth" value="<?php echo $student_information['Date_of_Birth']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Sex:</th>
              <td><input type="varchar" name="Sex" value="<?php echo $student_information['Sex']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Martial_status:</th>
              <td><input type="varchar" name="Martial_status" value="<?php echo $student_information['Martial_status']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Surgery:</th>
              <td><input type="varchar" name="Surgery" value="<?php echo $student_information['Surgery']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Health:</th>
              <td><input type="varchar" name="Health" value="<?php echo $student_information['Health']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Joining_date:</th>
              <td><input type="Date" name="Joining_date" value="<?php echo $student_information['Joining_date']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Exit_date:</th>
              <td><input type="date" name="Exit_date" value="<?php echo $student_information['Exit_date']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right"></th>
              <td><input class="btn btn-info" type="submit" value="submit"></td>
            </tr>
          </form>
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