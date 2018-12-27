<?php
$Payment_id=$_GET['Payment_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="DELETE FROM payment_information WHERE Payment_id=$Payment_id";
$result=mysqli_query($con, $sql);
header('Location:payment_information_view.php');

?>