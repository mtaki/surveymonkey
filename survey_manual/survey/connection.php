<?php


	

$con=mysqli_connect("localhost","root","","surveymonkey")or die(mysql_error()); 		

if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}			
?>
