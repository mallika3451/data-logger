<html>
<body>
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
echo "<h3>";
echo "LIST OF TOPICS:";
echo "</h3>";
$sql = "SHOW columns FROM data";
$result=mysqli_query($conn,$sql);
$a=1;
foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {	
echo '<tr>';
	
echo $a.") "  .$row["Field"]."<br>";
$a++;
echo '</tr>';
    }     
?>
<br>

</form>
</body>
</html>