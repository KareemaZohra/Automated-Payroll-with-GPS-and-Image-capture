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
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">World_Health<span class="logo_colour">_Multinational_NGO</span></a></h1>
          <h2>Automated.payroll.with.GPS.tracking</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
        	<li class="selected"><a href="index.php">Home</a></li>
          <li><a href="index.php">Fields</a></li>
           <!--<li><a href="employee.php">Employees</a></li>-->
          <li><a href="index.php">About us</a></li>
          <li><a href="index.php">Contact Us</a></li>
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
      	<h1><font color="#00687E">Log in as Admin</font></h1>
        <div align="center" style="background-color: #99B4D1; padding: 2px;">
                  	<br /><br />
        	<form action="loginprocess.php" method="post">
				User id  : <input type="text" name="id" required/><br/>
				<br/>
				Password : <input type="password" name="pass" required/><br/>
				
				    	<!--input name="checkbox" type="checkbox" value="OK" /><small>keep me logged in</small></br-->
					<br />
					<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value=" LogIn ">
					<br /><br />
             
			</form>
                  </div>
        
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
