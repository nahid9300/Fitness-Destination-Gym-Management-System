<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fdg_database");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$Student_name= mysqli_real_escape_string($link, $_REQUEST['Student_name']);
$Fathers_name= mysqli_real_escape_string($link, $_REQUEST['Fathers_name']);
$Sex= mysqli_real_escape_string($link, $_REQUEST['Sex']);
$Martial_status= mysqli_real_escape_string($link, $_REQUEST['Martial_status']);
$Surgery= mysqli_real_escape_string($link, $_REQUEST['Surgery']);
$Health= mysqli_real_escape_string($link, $_REQUEST['Health']);
$Cell= mysqli_real_escape_string($link, $_REQUEST['Cell']);
$Telephone= mysqli_real_escape_string($link, $_REQUEST['Telephone']);
$Present_address= mysqli_real_escape_string($link, $_REQUEST['Present_address']);
$Permanent_address= mysqli_real_escape_string($link, $_REQUEST['Permanent_address']);
$Height= mysqli_real_escape_string($link, $_REQUEST['Height']);
$Joining_weight= mysqli_real_escape_string($link, $_REQUEST['Joining_weight']);
$Present_weight= mysqli_real_escape_string($link, $_REQUEST['Present_weight']);
$Desire_weight= mysqli_real_escape_string($link, $_REQUEST['Desire_weight']);
$Joining_date= mysqli_real_escape_string($link, $_REQUEST['Joining_date']);
// attempt insert query execution
$sql = "INSERT INTO admission_form(Student_name,Fathers_name,Sex,Martial_status,Surgery,Health,Cell,Telephone,Present_address,Permanent_address,Height,Joining_weight,Present_weight,Desire_weight,Joining_date) VALUES ('$Student_name','$Fathers_name','$Sex','$Martial_status','$Surgery','$Health','$Cell','$Telephone','$Present_address','$Permanent_address','$Height','$Joining_weight','$Present_weight','$Desire_weight','$Joining_date');";

$sql .= "INSERT INTO student_information(Student_name,Fathers_name,Sex,Martial_status,Surgery,Health,Joining_date) VALUES ('$Student_name','$Fathers_name','$Sex','$Martial_status','$Surgery','$Health','$Joining_date');";

$sql .= "INSERT INTO physique_information(Student_name,Height,Joining_weight,Present_weight,Desire_weight) VALUES ('$Student_name', '$Height','$Joining_weight','$Present_weight','$Desire_weight');";

$sql .= "INSERT INTO contact_information(Student_name,Cell,Telephone,Present_address,Permanent_address) VALUES ('$Student_name', '$Cell','$Telephone','$Present_address','$Permanent_address')";
if(mysqli_multi_query($link, $sql)){
header("Location:admission_form_view.php");
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>