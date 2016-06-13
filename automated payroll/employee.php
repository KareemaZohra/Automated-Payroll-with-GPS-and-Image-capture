<?php
session_start(); 
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
      <?php
					$query = 'select * from employee where empId="1"';
					
					$result = mysql_query($query);
					
			/*$num_row = mysql_num_rows($result); */
				
				$row = mysql_fetch_array($result);
				
				$name=$row["name"];
				$pic=$row["pic"];
				$joinDate=$row["joinDate"];
				$birthDate=$row["birthDate"];
				$currentAd=$row["currentAd"];
				$permAd=$row["permAd"];
				$nationality=$row["nationality"];
				$education=$row["education"];
				$phone=$row["phone"];
				$email=$row["email"];
				$type=$row["type"];
				$jobRank=$row["jobRank"];
				$basicPay=$row["basicPay"];
				$hourPay=$row["hourPay"];
				$workTime=$row["workTime"];
				$overTime=$row["overTime"];
				$performance=$row["performance"];
			
				?>
      <div id="sidebar_container">
        <div class="sidebar">
           <h3>Monthly Info </h3>
          <h4>Total hours :</h4>
          <p><?php echo $workTime;?></p>
          <h4>Total overtime :</h4>
          <p><?php echo $overTime;?></p>
          <h4>Performance(out of 10) :</h4>
         <p><?php echo $performance;?></p>
          <h4>contact:</h4>
          <p><?php echo $phone;?></p>
          <p><?php echo $email;?></p>
        </div>
      </div>
      <div class="content">
                	
                  <h1>
                  	<font color="#00687E">
                  		Profile of <?php echo $name;?>
                  	</font>
                  </h1>
                  <div align="right"; style="background-color: #7806A4; padding: 10px;">
                  	<img src="data:image/jpeg;base64,<?php echo base64_encode($pic);?>" width="230px" height="250px" />
                  </div>
                  <h4>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Employee Since : <?php echo $joinDate;?>
                  </div> 
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Birth Date : <?php echo $birthDate;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Nationality : <?php echo $nationality;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Current Address : <?php echo $currentAd;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Permanent Address : <?php echo $permAd;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Education : <?php echo $education;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Position : <?php echo $jobRank;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Type : <?php echo $type;?>
                  </div>
                  <div style="background-color: #7806A4; padding: 2px;">
                  	Basic Pay : <?php echo $basicPay;?>
                </div>
                <div style="background-color: #7806A4; padding: 2px;">
                  	Hourly Pay : <?php echo $hourPay;?>
                  </div>
                  </h4>
                  
    </div>
    <!--<footer>
      <p>Copyright &copy; KareeShoma | <a href="http://www.css3templates.co.uk">design from css.co.uk/a></p>
    </footer>-->
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
