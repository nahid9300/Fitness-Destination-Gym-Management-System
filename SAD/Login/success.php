<?php
session_start();
if(empty($_SESSION['email'])){
	header("Location:index.php");
}
?>
<h1>Hello<?php echo $_SESSION['email'];?></h1>
<a href="../admission_form.php">Student admission</a>
<br>
<a href="../equipment_information_form.php">Equipment information insertion</a>
<br>
<a href="../payment_information_form.php">Payment information insertion</a>
<br>
<a href="logout.php">Logut</a>