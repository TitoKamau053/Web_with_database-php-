<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Titus7833@gmail";
$dbname = "login_sample_db";

if( ! $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed to Connect to Database");	
}