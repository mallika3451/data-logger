<html>
<body>
<form action="an.php" method="POST">
<?php
$servername = "localhost";
$username="root";
$password="";
$db = "datalogger";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else{
//echo "Connected successfully";
}
$sql = "SHOW COLUMNS FROM data";
$result=mysqli_query($conn,$sql);
?>
<table width="30%" bgcolor="#FAEBD7" align="center">
<br><br>
<center><h3> Enter Data About Required Topic </h3></center>
<tr><td><p>Select the topic:<p></td>
<td>
<select id="topic" name="topic">
<?php
foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {	
	
echo '<option value="'.$row["Field"].'">'.$row["Field"].'</option>';
    }     

?>
</td>
</select>
</tr>
<tr>
<td>
<p>Enter data:<p></td>
<td><input type="text" name="dat"></td></tr>
<tr><td></td>
<td><br><input type="submit" value="update"></td></tr>
</table>
</form>
</body>
</html>

