<?php
$Equipment_id=$_GET['Equipment_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="DELETE FROM equipment_information WHERE Equipment_id=$Equipment_id";
$result=mysqli_query($con, $sql);
header('Location:equipment_information_view.php');

?>