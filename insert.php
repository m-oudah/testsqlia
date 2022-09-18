
<?php

require_once 'header.php';


$connection = mysqli_connect("localhost","root","");
if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}

$fname= $_GET["fname"];
$mob= $_GET["mobile"];
$em= $_GET["em"];

$course= $_GET["course"];


mysqli_select_db($connection, "phd_db");
/*
$sql = "INSERT INTO registertb (Name, course, mobile, phone, email ,dateofbirth, address) VALUES ('Mohamamd','aaaaaa', 059255454, 24880022,'m@m.com', '1/5/2017', 'gaza' )"; 
*/

$sql = "INSERT INTO registertb (stName, course, mobile, email) VALUES ('$fname','$course', '$mob', '$em')";
//$sql = "Select * from registertb where stID=".$name;

if (mysqli_query($connection,$sql)) {
    echo "<br> Data inserted";
  //  header("location: course-register-get.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}



if (isset($_SERVER['HTTP_REFERER'])) {
 
    $url_info = parse_url($_SERVER['HTTP_REFERER']);
 
    // is the surfer coming from Google?
    if ($url_info['host'] == 'http://localhost/test-sqlia') {
 
        parse_str($url_info['query'], $vars);
 
        echo "You searched on for this keyword: ". $vars['q'];
 
    }
 
}


mysqli_close($connection);

require_once 'footer.php';
?>

