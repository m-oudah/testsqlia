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
 

    <div class="page-header">
      <div class="row">
      
      <div class="col-10">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
      </div>

      <div class="col-2">
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
      </div>
      </div>
    </div>
    <p>
        <a href="course-register-get.php" class="btn btn-success">Course Register (Get)</a>
        <a href="course-register-post.php" class="btn btn-success">Course Register (POST)</a>

    </p>
