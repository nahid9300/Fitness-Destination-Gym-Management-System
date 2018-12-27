<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fdg_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Admin_id= mysqli_real_escape_string($link, $_REQUEST['Admin_id']);
$Admin_name= mysqli_real_escape_string($link, $_REQUEST['Admin_name']);
$Password= mysqli_real_escape_string($link, $_REQUEST['Password']);

 
// attempt insert query execution
$sql = "INSERT INTO admin_login(Admin_id,Admin_name,Password) VALUES ('$Admin_id','$Admin_name', '$Password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>