<?php
include 'dbcon.php';
$id=$_GET['val'];
$sql="SELECT * FROM `table` WHERE uid=$id";
$result=mysqli_query($v,$sql);
$row=mysqli_fetch_array($result);
 $sql = "DELETE FROM `table` WHERE uid = $id ";
   mysqli_query($v,$sql);
   header( "Location: see.php" ); 
   

?>
?>