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
$Student_name = mysqli_real_escape_string($link, $_REQUEST['Student_name']);
$Payment_Date = mysqli_real_escape_string($link, $_REQUEST['Payment_Date']);
$Payment_month = mysqli_real_escape_string($link, $_REQUEST['Payment_month']);
$Amount = mysqli_real_escape_string($link, $_REQUEST['Amount']);
$Due = mysqli_real_escape_string($link, $_REQUEST['Due']);
 
// attempt insert query execution
$sql = "INSERT INTO payment_information(Stu_id,Student_name,Payment_Date,Payment_month,Amount,Due) VALUES ('$Stu_id', '$Student_name', '$Payment_Date','$Payment_month','$Amount','$Due')";
if(mysqli_query($link, $sql)){
    /*echo "Records added successfully.";*/
    header("Location:payment_information_view.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>