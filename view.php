<html>
<body>
<form action="vvi.php" method="POST">
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
<table width="20%" bgcolor="#FFC0CB" align="center">
<br><br>
<center><h3> Search for required data: </h3><center>
<tr><td><p>Select the topic:<p></td>
<td>
<select id="topic" name="topic">
<?php
foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {	
	
echo '<option value="'.$row["Field"].'">'.$row["Field"].'</option>';

    }     

?>
</td>
</tr>
</select>
<tr><td></td>
<td>
<br>
<input type="submit" value="search">
</td></tr>
</form>
</table>
</body>
</html>