<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fdg_database");

// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$Stu_id = mysqli_real_escape_string($link, $_REQUEST['Stu_id']);
$Student_Name = mysqli_real_escape_string($link, $_REQUEST['Student_Name']);
$Father_nm = mysqli_real_escape_string($link, $_REQUEST['Father_nm']);
$Date_of_Birth = mysqli_real_escape_string($link, $_REQUEST['Date_of_Birth']);
$Sex = mysqli_real_escape_string($link, $_REQUEST['Sex']);
$Martial_Status = mysqli_real_escape_string($link, $_REQUEST['Martial_Status']);
$Surgery = mysqli_real_escape_string($link, $_REQUEST['Surgery']);
$Health = mysqli_real_escape_string($link, $_REQUEST['Health']);

// attempt insert query execution
$sql = "INSERT INTO student_information(Stu_id,Student_Name,Father_nm,Date_of_Birth,Sex,Martial_Status,Surgery,Health) VALUES ('$Stu_id', '$Student_Name', '$Father_nm','$Date_of_Birth','$Sex','$Martial_Status','$Surgery','$Health')";
if(mysqli_query($link, $sql)){
echo "Records added successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>