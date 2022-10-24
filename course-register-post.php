<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


require_once 'header.php';


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $fname = trim($_POST["fname"]);
        $course = trim($_POST["course"]);
        $mob = trim($_POST["mobile"]);
        $em = trim($_POST["em"]);

        // Prepare an insert statement
       // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $sql = "INSERT INTO registertb (stName, course, mobile, email) VALUES ('$fname','$course', '$mob', '$em')";
 /**************************************************************************
        if($stmt = mysqli_prepare($link, $sql)){
                    
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                
                // $data= file_get_contents('php://input');
                // $arr = $_POST;
                // $json = json_encode($arr, true);
                
                // $data = json_decode($json);

                // echo "<br> POST content:".$json;

                // print_r($_SERVER);
                // print_r($_POST);
                // print_r($_GET);

                echo "<br> Data inserted";
              //  header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }else{
            echo "Something went wrong in SQL. Please try again later.";

        }
         // Close connection
          mysqli_close($link);
************************************************************************/

        $data= file_get_contents('php://input');
        $arr = $_POST;
        $json = json_encode($arr, true);
        $data = json_decode($json);

        echo '<br/>Json Request:<br/>'.$json;

        if ($result =  mysqli_query($link, $sql)) {
            echo "<br>Data Inserted";
          
            
            // $a= implode('', $_POST);
            // echo '<br/>POST string: '.$a;

            // Free result set
            // mysqli_free_result($result);
        }
        else {
            echo "Error .. data not inserted";

        }
        mysqli_close($link);


        


    }



?>
<div style="padding-top:20px; width:80%;">
    <h3> COURSE REGISTERATION - (POST) METHOD</h3>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">


        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fname" class="form-control" required>
        </div>


        <div class="form-group">
            <label>MOBILE NO.</label>
            <input type="number" name="mobile" class="form-control" required>
        </div>

        <div class="form-group">
            <label>EMAIL</label>
            <input type="email" name="em" class="form-control" required>
        </div>




        <div class="form-group">
            <label or="exampleFormControlSelect1">CHOOSE COURSE</label>

            <select class="form-control" id="exampleFormControlSelect1" name="course">

                <option value="c1">ICDL Course</option>
                <option value="c2">HTML WEB pages design</option>
                <option value="c3">Motion graphic course</option>
                <option value="c4">Hardware Maintenance</option>
            </select>
        </div>

        <input type="submit" value="REGISTER" class="btn btn-success">
    </form>

</div>
</body>

</html>