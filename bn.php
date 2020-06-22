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
echo "<br>";
}
$a=$_POST["topic"];
$q="ALTER TABLE data DROP $a";
$result=$conn->query($q);
if($result==TRUE)
{
echo "column ".$a." deleted";
}
else
{

echo "fail";
echo mysqli_error($conn);
}
?>