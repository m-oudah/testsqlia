<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


require_once 'header.php';


?>

<h3> COURSE REGISTERATION - (GET) METHOD </h3>
	
	<form  action="insert.php" method="GET">


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
