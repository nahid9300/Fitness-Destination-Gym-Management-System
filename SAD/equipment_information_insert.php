<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fdg_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
/*$Equipment_id = mysqli_real_escape_string($link, $_REQUEST['Equipment_id']);*/
$Equipment_Name = mysqli_real_escape_string($link, $_REQUEST['Equipment_Name']);
$Quantity = mysqli_real_escape_string($link, $_REQUEST['Quantity']);
$Availability = mysqli_real_escape_string($link, $_REQUEST['Availability']);
 
// attempt insert query execution
$sql = "INSERT INTO equipment_information(Equipment_id,Equipment_Name,Quantity,Availability) VALUES ('$Equipment_id', '$Equipment_Name', '$Quantity','$Availability')";
if(mysqli_query($link, $sql)){
    header("Location:equipment_information_view.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>