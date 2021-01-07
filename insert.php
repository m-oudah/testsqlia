<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php

$connection = mysqli_connect("localhost","root","");
if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}
/*
$name= $_POST["n"];
$mob= $_POST["mobile"];
    $em= $_POST["em"];
$course= $_POST["course"];

*/

$name= $_GET["n"];
$mob= $_GET["mobile"];
    $em= $_GET["em"];
$course= $_GET["course"];


mysqli_select_db($connection, "phd_db");
/*
$sql = "INSERT INTO registertb (Name, course, mobile, phone, email ,dateofbirth, address) VALUES ('Mohamamd','aaaaaa', 059255454, 24880022,'m@m.com', '1/5/2017', 'gaza' )"; 
*/

$sql = "INSERT INTO registertb (stName, course, mobile, email) VALUES ('$name','$course', '$mob', '$em')";
//$sql = "Select * from registertb where stID=".$name;

if (mysqli_query($connection,$sql)) {
    echo "<br> Data inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


mysqli_close($connection);

?>
</body>
</html>
