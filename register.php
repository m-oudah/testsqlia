<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SQL INJECTION TEST</title>
</head>

<body>
<div style="text-align:center; margin-top:100px;"> 
<h1>SQL INJECTION TEST</h1>
<hr/>

		<h3> COURSE REGISTERATION </h3>
	
		<form action="insert.php" method="get">
		FULL NAME : 
		<input type="text" name="n"> <br><br>
        
        MOBILE NO.:
		<input type="text" name="mobile"> <br><br>

        EMAIL :
		<input type="text" name="em"> <br><br>
		
        CHOOSE COURSE : 
        <select name="course">
          
            <option value="c1">ICDL Course</option>
            <option value="c2">HTML WEB pages design</option>
            <option value="c3">Motion graphic course</option>
                <option value="c4">Hardware Maintenance</option>
        </select> <br><br>
		
      <input type="submit" value="REGISTER">
</form>

</div>
</body>
</html>
