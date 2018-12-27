<?php
$Admission_id=$_GET['Admission_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM admission_form WHERE Admission_id=$Admission_id";
$query=mysqli_query($con, $sql);
$admission_form=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Admission info</title>
  </head>
  <body>
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-2">
          <br>
          <a href="admission_form_view.php" class="btn btn-success">Back</a>
        </div>
        <div class="col-md-8">
          
          <h1>Admission information</h1>
          <table class="table">
            <tr>
              <th class="text-right">Admission id:</th>
              <td><?php echo $admission_form['Admission_id'];?></td>
            </tr>
            <tr>
              <th class="text-right">Student name:</th>
              <td><?php echo $admission_form['Student_name'];?></td>
            </tr>
            <tr>
              <th class="text-right">Father's name:</th>
              <td><?php echo $admission_form['Fathers_name'];?></td>
            </tr>
            <tr>
              <th class="text-right">Sex:</th>
              <td><?php echo $admission_form['Sex'];?></td>
            </tr>
            <tr>
              <th class="text-right">Martial status:</th>
              <td><?php echo $admission_form['Martial_status'];?></td>
            </tr>
            <tr>
              <th class="text-right">Surgery</th>
              <td><?php echo $admission_form['Surgery'];?></td>
            </tr>
            <tr>
              <th class="text-right">Health:</th>
              <td><?php echo $admission_form['Health'];?></td>
            </tr>
            <tr>
              <th class="text-right">Cell:</th>
              <td><?php echo $admission_form['Cell'];?></td>
            </tr>
            <tr>
              <th class="text-right">Telephone:</th>
              <td><?php echo $admission_form['Telephone'];?></td>
            </tr>
            <tr>
              <th class="text-right">Present address:</th>
              <td><?php echo $admission_form['Present_address'];?></td>
            </tr>
            <tr>
              <th class="text-right">Permanent_address:</th>
              <td><?php echo $admission_form['Permanent_address'];?></td>
            </tr>
            <tr>
              <th class="text-right">Height:</th>
              <td><?php echo $admission_form['Height'];?></td>
            </tr>
            <tr>
              <th class="text-right">Joining_weight:</th>
              <td><?php echo $admission_form['Joining_weight'];?></td>
            </tr>
            <tr>
              <th class="text-right">Present_weight:</th>
              <td><?php echo $admission_form['Present_weight'];?></td>
            </tr>
            <tr>
              <th class="text-right">Desire_weight:</th>
              <td><?php echo $admission_form['Desire_weight'];?></td>
            </tr>
            <tr>
              <th class="text-right">Joining date:</th>
              <td><?php echo $admission_form['Joining_date'];?></td>
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