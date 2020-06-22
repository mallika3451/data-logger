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
$c=$_POST["dat"];
$q="INSERT INTO data($a)VALUES('$c')";
if(!mysqli_query($conn,$q))
{
echo "fail";
echo " ".mysqli_error($conn);
}
else
{

echo "new ROW added:".$c."in column:".$a;
}
?>