<?php
include 'dbcon.php'
?>
<html>
<body>
<center>
<table border=1>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>address</th>
		<th>edit</th>
		<th>delete</th>
		
	</tr>
<?php
$result=mysqli_query($v,"SELECT * FROM `table`");
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
		<td><?php  echo $row["uid"]; ?></td>
		<td><?php  echo $row["uname"]; ?></td>
		<td><?php  echo $row["uaddress"]; ?></td>
		<td><a href="sampleedit.php?val=<?php  echo $row["uid"]; ?>">edit</a></td>
		<td><a href="sampledelete.php?val=<?php  echo $row["uid"]; ?>">del</a></td>
		
	</tr>
	<?php
}?>
	
</table>
</center>
</body>
</html>
