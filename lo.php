<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_error ($conn)){
    die ("Connection failed: ".mysqli_error ($conn));
}
$uid=$_POST['nam'];
$password=$_POST['pss'];
 $query ="SELECT * FROM log WHERE userid='$uid' AND pass ='$password'";
 $result = mysqli_query($conn,$query);
 if($result->num_rows>0)
    {
        header("location:http://localhost/myproj/mainpage.html");
        echo "successful login";
    }
  else
    {
         echo '<script>alert("user id or password are invalid")</script>';
    }
?>