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

        $name = trim($_POST["n"]);
        $course = trim($_POST["course"]);
        $mob = trim($_POST["mobile"]);
        $em = trim($_POST["em"]);

        // Prepare an insert statement
       // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $sql = "INSERT INTO registertb (stName, course, mobile, email) VALUES ('$name','$course', '$mob', '$em')";
                
        if($stmt = mysqli_prepare($link, $sql)){
                    
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
              //  header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
         // Close connection
          mysqli_close($link);

    }



?>

		<h3> COURSE REGISTERATION - (POST) METHOD</h3>
	
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">


        <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="n" class="form-control" required>
        </div>    


        <div class="form-group">
                <label>MOBILE NO.</label>
                <input type="text" name="mobile" class="form-control" required>
        </div>  

        <div class="form-group">
                <label>EMAIL</label>
                <input type="text" name="em" class="form-control" required>
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

      <input type="submit" value="REGISTER"  class="btn btn-success">
</form>

</div>
</body>
</html>