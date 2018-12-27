<?php
$hostname='localhost';
$user='root';
$password='';
$db_name='fdg_database';

$connection=mysqli_connect($hostname,$user,$password,$db_name);
if(!$connection){
	die('Unable to connect: '.mysqli_connect_error());
}
?>