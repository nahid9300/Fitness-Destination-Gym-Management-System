<?php
$Stu_id=$_GET['Stu_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM contact_information WHERE Stu_id=$Stu_id";
$result=mysqli_query($con, $sql);
$contact_information=mysqli_fetch_assoc($result);

if(isset($_POST['Student_name'])){
$Student_name =$_POST['Student_name'];
$Cell=$_POST['Cell'];
$Telephone=$_POST['Telephone'];
$Present_address =$_POST['Present_address'];
$Permanent_address =$_POST['Permanent_address'];

$sql="UPDATE contact_information SET Student_name='$Student_name',Cell=$Cell,Telephone=$Telephone, Present_address='$Present_address', Permanent_address='$Permanent_address' WHERE Stu_id=$Stu_id";
mysqli_query($con, $sql);
header('Location:contact_information_indiView.php?Stu_id='.$Stu_id);
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
    <title>Contact_information_Update</title>
  </head>
  <body>
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-2">
          <br>
          
          <a href="contact_information_view.php" class="btn btn-success">Back</a>
        </div>
        <div class="col-md-8">
          
          <h1>Contact information update</h1>
          <table class="table">
            <form action="" method="POST">
            <tr>
              <th class="text-right">Student name:</th>
              <td>
                <input type="varchar" name="Student_name" value="<?php echo $contact_information['Student_name']?>" class="form-control">
              </td>
            </tr>
            <tr>
              <th class="text-right">Cell:</th>
              <td><input type="int" name="Cell" value="<?php echo $contact_information['Cell']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Telephone</th>
              <td><input type="int" name="Telephone" value="<?php echo $contact_information['Telephone']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Present address:</th>
              <td><input type="varchar" name="Present_address" value="<?php echo $contact_information['Present_address']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Permanent address:</th>
              <td><input type="varchar" name="Permanent_address" value="<?php echo $contact_information['Permanent_address']?>" class="form-control"></td>
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