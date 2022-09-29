<?php
$servername="localhost";
$username="kclegobricks_USR";
$password="testkoha123@";
$database="Koha_php";
$con=new mysqli($servername,$username,$password,$database);
if($con->connect_error)
{
	die("connection failed".$con->connect_error);
}
?>
