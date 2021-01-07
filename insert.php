
<?php

require_once 'header.php';


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

require_once 'footer.php';
?>

