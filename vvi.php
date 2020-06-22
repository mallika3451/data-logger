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
//echo "Connected successfully";
  }
  
  $var=$_POST['topic'];
$q="select $var from data Where $var IS NOT NULL;";
$v=mysqli_query($conn,$q);
if($v->num_rows > 0){
    $delimiter=",";
    $filename= "$var".date('y-m-d').".csv";
    $f=fopen('php://memory','w');
    $field=array($var);
    fputcsv($f,$field,$delimiter);
    while($row = $v->fetch_assoc()){
$lineData=array($row[$var]);
fputcsv($f, $lineData, $delimiter);
}
fseek($f, 0);
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');
fpassthru($f);
}
exit;
?>