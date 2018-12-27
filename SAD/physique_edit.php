<?php
$Stu_id=$_GET['Stu_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM physique_information WHERE Stu_id=$Stu_id";
$result=mysqli_query($con, $sql);
$physique_information=mysqli_fetch_assoc($result);

if(isset($_POST['Student_name'])){
$Student_name=$_POST['Student_name'];
$Height=$_POST['Height'];
$Joining_weight=$_POST['Joining_weight'];
$Present_weight=$_POST['Present_weight'];
$Desire_weight=$_POST['Desire_weight'];

$sql="UPDATE physique_information SET Student_name='$Student_name',Height='$Height',Joining_weight='$Joining_weight', Present_weight='$Present_weight', Desire_weight='$Desire_weight' WHERE Stu_id=$Stu_id";
mysqli_query($con, $sql);
header('Location:physique_info_indiView.php?Stu_id='.$Stu_id);
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
          <a href="physique_information_view.php" class="btn btn-success">Back</a>
        </div>
        <div class="col-md-8">
          
          <h1>physique information update</h1>
          <table class="table">
            <form action="" method="POST">
            <tr>
              <th class="text-right">Student name:</th>
              <td>
                <input type="varchar" name="Student_name" value="<?php echo $physique_information['Student_name']?>" class="form-control">
              </td>
            </tr>
            <tr>
              <th class="text-right">Height:</th>
              <td><input type="varchar" name="Height" value="<?php echo $physique_information['Height']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Joining weight</th>
              <td><input type="varchar" name="Joining_weight" value="<?php echo $physique_information['Joining_weight']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Present weight:</th>
              <td><input type="varchar" name="Present_weight" value="<?php echo $physique_information['Present_weight']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Desire weight:</th>
              <td><input type="varchar" name="Desire_weight" value="<?php echo $physique_information['Desire_weight']?>" class="form-control"></td>
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