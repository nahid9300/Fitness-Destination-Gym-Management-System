<?php
$Admission_id=$_GET['Admission_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="DELETE FROM admission_form WHERE Admission_id=$Admission_id";
$result=mysqli_query($con, $sql);
header('Location:admission_form_view.php');
?>