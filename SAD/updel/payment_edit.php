<?php
$Payment_id=$_GET['Payment_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM payment_information WHERE Payment_id=$Payment_id";
$result=mysqli_query($con, $sql);
$payment_information=mysqli_fetch_assoc($result);

if(isset($_POST['Stu_id'])){
$Stu_id=$_POST['Stu_id'];
$Student_Name =$_POST['Student_Name '];
$Payment_Date =$_POST['Payment_Date '];
$Payment_month=$_POST['Payment_month'];
$Amount =$_POST['Amount '];
$Due =$_POST['Due '];

$sql="UPDATE payment_information SET Stu_id=$Stu_id,Student_name='$Student_name',Payment_Date='$Payment_Date',Payment_month='$Payment_month', Amount=$Amount, Due=$Due WHERE Payment_id=$Payment_id";
mysqli_query($con, $sql);
header('Location:payment_information_indiView.php?Payment_id='.$Payment_id);
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
    <title>payment_information_Update</title>
  </head>
  <body>
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-2">
          <br>
          <a href="payment_information_view.php" class="btn btn-success">Back</a>
        </div>
        <div class="col-md-8">
          
          <h1>payment information update</h1>
          <table class="table">
            <form action="" method="POST">
            <tr>
              <th class="text-right">Stu id :</th>
              <td>
                <input type="int" name="Stu_id " value="<?php echo $payment_information['Stu_id ']?>" class="form-control">
              </td>
            </tr>
            <tr>
              <th class="text-right">Student name:</th>
              <td>
                <input type="varchar" name="Student_name" value="<?php echo $payment_information['Student_name']?>" class="form-control">
              </td>
            </tr>
            <tr>
              <th class="text-right">Payment Date :</th>
              <td><input type="date" name="Payment_Date " value="<?php echo $Payment_Date ['Payment_Date']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Payment month</th>
              <td><input type="
text" name="Payment_month" value="<?php echo $Payment_month['Payment_month']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Amount:</th>
              <td><input type="int" name="Amount" value="<?php echo $Amount['Amount']?>" class="form-control"></td>
            </tr>
            <tr>
              <th class="text-right">Due:</th>
              <td><input type="int" name="Due" value="<?php echo $Due['Due']?>" class="form-control"></td>
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