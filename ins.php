<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";
$conn = mysqli_connect ($servername, $username, $password, $dbname);
if (mysqli_error ($conn)) {
  die ("Connection failed: " .mysqli_error ($conn));
}
$name=$_POST ["name"];
$number=$_POST ["number"];
$uid=$_POST ["uid"];
$password=$_POST ["password"];
$email=$_POST ["email"];
$sql = "INSERT INTO log (name,mobnum,userid,pass,emailid) VALUES ('$name','$number','$uid','$password','$email')";
if (!mysqli_query ($conn, $sql))
{
echo "ERROR WHILE DATA INSERTION";

}
else
{
echo "DATA INSERTED!!!!!";
header("location:http://localhost/myproj/logi.html");
}
mysqli_close ($conn);
?>
