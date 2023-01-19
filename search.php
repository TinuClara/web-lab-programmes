<?php
include 'dbconbook.php';
if(isset($_POST["SUBMIT"])){
$a=$_POST["n1"];
$s="SELECT * FROM `details` WHERE `TITLE`='$a'";
$result=mysqli_query($v,$s);
}
?><html>
<body>
<form method="POST" action="#">
<table>
<tr><td>Search</td><td><input type="text" name="n1"</td></tr>
<tr><td><input type="SUBMIT" name="SUBMIT" id="SUBMIT"></td></tr>


</table>
</form>
<table border="1"><tr>
<td>AI</td>
<td>TITLE:</td>
<td>AUTHOR:</td>
<td>EDITION</td>
<td>PUBLISHER</td>
<?php
if(isset($_POST["SUBMIT"]))
{
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["AI"];?></td>
<td><?php echo $row["TITLE"];?></td>
<td><?php echo $row["AUTHOR"];?></td>
<td><?php echo $row["EDITION"];?></td>
<td><?php echo $row["PUBLISHER"];?></td>
</tr>
<?php
}
}
?>

</body>
</html>