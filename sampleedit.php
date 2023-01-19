<?php
include 'dbcon.php'

$id=$_GET['val']
$sql="SELECT * FROM `table` WHERE uid=$id"
$result = mysqli_query($v,$sql);

if(isset($_POST['submit'])){
	$nam=$_POST['name'];
	$address=$_POST['address'];
	
	$sql="UPDATE `table` SET `uname`='$name',`uaddress`='$address' WHERE `uid`='$id'"
	
	
	$r = mysqli_query($con,$sql);
	if($r==1)
	{
		echo "Inserted ";
        header( "Location: view.php" ); 
	}
	else
	{
		echo "not inserted ";
	}
	
}
?>