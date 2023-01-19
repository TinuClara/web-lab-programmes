<?php
$con=mysqli_connect("localhost","root","","philip");
if($con)
	echo "connected";
else
	echo "not connected";
?>