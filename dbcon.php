<?php
$v=mysqli_connect("localhost","root","","sampleexam");
if($v)
	echo "connected";
else
	echo "not connected";
?>