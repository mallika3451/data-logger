<?php
$servername = "localhost";
$username="root";
$password="";
$db = "datalogger";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
echo "<br>";
}
$nam=$_POST['new'];
$qu="alter table data add column $nam varchar(30)";
$result=$conn->query($qu);
if($result==TRUE)
{
echo "new column added: $nam";
}
else
{
   echo '<script>alert("repeating of existing topic is not possible")</script>';
echo "fail";
}
?>
