<?php 
include "database.php";
?>
  <!DOCTYPE HTML>
<html>

<head>
  <title>World_Health</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
function confirmation() {
var answer = confirm("Password Update Successful!")
}
//-->
function checkPasswordMatch() {
    var password = $("#pass1").val();
    var confirmPassword = $("#pass2").val();

    if (password != confirmPassword)
        $("#check").html("(Passwords do not match!)");
    else
        $("#check").html("(Passwords match.)");
}
</script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">World_Health<span class="logo_colour">_Multinationa_NGO</span></a></h1>
          <h2>Automated.payroll.with.GPS.tracking</h2>
      
         </br>
        </div>
      </div>
     <nav>
        <ul class="sf-menu" id="nav">
        	<li class="selected"><a href="admin.php">Admin</a></li>
          <li><a href="admin.php">Fields</a></li>
           <!--<li><a href="employee.php">Employees</a></li>-->
          <li><a href="addEmployee.php">Add Employee</a></li>
          <li><a href="#">Tasks</a>
            <ul>
             
              <li><a href="seeLocation.php">View Location</a></li>
              <li><a href="viewImage.php">View Sent Images</a></li>
              <li><a href="salaryCalc.php">Check Salary</a></li>
              <li><a href="updatePassword.php">Update Password</a></li>
            </ul>
          </li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
        <li><img src="images/1.jpg" width="600" height="300" alt="seascape_one" /></li>
        <li><img src="images/2.jpg" width="600" height="300" alt="seascape_two" /></li>
        <li><img src="images/3.jpg" width="600" height="300" alt="seascape_three" /></li>
        <li><img src="images/4.jpg" width="600" height="300" alt="seascape_four" /></li>
        <li><img src="images/5.jpg" width="600" height="300" alt="seascape_five" /></li>
        <li><img src="images/6.jpg" width="600" height="300" alt="seascape_seascape" /></li>
      </ul>
      <div id="sidebar_container">
        <div class="sidebar">
          Latest News
          <h4>New Website Launched</h4>
          <h5>January 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
          <h4>20% Discount</h4>
          <h5>March 1st, 2012</h5>
          <p>We are offering a 20% discount to all new customers.<br /><a href="#">Read more</a></p>
        </div>
      </div>
      <div class="content">
      	<h1><font color="#00687E">Update Password</font></h1>
        <div align="center" style="background-color: #99B4D1; padding: 2px;">
                  	<form action="updatePassword.php" method="POST" enctype="multipart/form-data" >
			<br /><br />
			Enter username : <input type="text" name="username" placeholder="enter username" required/><br /><br />

			Enter old password : <input type="password" name="old" placeholder="enter old one" required/><br /><br />
			<div class="td">
			Enter new password : <input type="password" name="pass1" id="pass1" placeholder="choose a password" required/></div><br />
			<div class="td">
			Confirm new password : <input type="password" name="pass2" id="pass2" placeholder="re-enter password" onkeyup="checkPasswordMatch();" required/></div>
			<br />
			
    <div class="alert" id="check">
     <br /> </div>
		    
		    <input type="submit" onclick="confirmation()" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value=" SUBMIT ">
		</form>
                 <br /><br /> 
                 	<?php 
      	$name=$_POST["username"];
		$old=$_POST["old"];
		$new=$_POST["pass2"];
      	$query = "UPDATE user 
      	SET pass='$new'
		WHERE name='$name' and pass='$old'";
					$result = mysql_query($query);
				
               
				 ?>
        </div>
    </div>
   
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
