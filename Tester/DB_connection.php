<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

$con = new mysqli($hostname,$username,$password,$dbname);

if($con->connect_error)
{

	die ("Connection Error");
}

?>