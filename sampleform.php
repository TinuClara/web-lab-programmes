<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
	$nam=$_POST['name'];
	$address=$_POST['address'];
	

	$sql="INSERT INTO `table`(`uname`, `uaddress`) VALUES ('$nam','$address')";
	$result=mysqli_query($v,$sql);
	if($result==1)
	{
		echo "Inserted ";
	}
	else
	{
		echo "not inserted ";
	}
}
?>



<form method="POST" action=#>
<center>
<table>
<tr><td>
<input type="text" name="name" placeholder="name"></td></tr>
<tr><td><input type="text" name="address" placeholder="address"></td></tr>

<tr><td><center><input type="SUBMIT" name="submit" value="SUBMIT"></center></tr>
</table>
</center>
<a href="see.php">see</a>
