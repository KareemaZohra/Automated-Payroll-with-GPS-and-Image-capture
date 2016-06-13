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
          <h1><a href="index.php">World_Health<span class="logo_colour">_Multinationa_NGO</span></a></h1>
          <h2>Automated.payroll.with.GPS.tracking</h2>
         
         </br>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
        	<li><a href="admin.php">Admin</a></li>
          <li><a href="admin.php">Fields</a></li>
           <!--<li><a href="employee.php">Employees</a></li>-->
          <li class="selected"><a href="addEmployee.php">Add Employee</a></li>
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
                  		New Employee Registration
                  	</font>
                  </h1>
                  
                  <h3>
                  <div style="background-color: #99B4D1; padding: 2px;">
                  	<div align="center">
                  	<form action="addEmployee.php" method="post" enctype="multipart/form-data">
                  		<div align="left"><u>Personal Information :</u></div>
                  	name : <input type="text" name="name" /><br/>
                  	birthday: <input type="date" name="birthday"><br/>
                    currentAd: <input type="text" name="currentAd" /><br/>
                  	permAd: <input type="text" name="permAd" /><br/>
                  	nationaliy: <input type="text" name="nationaliy" /><br/>
                  	education: <input type="text" name="education" /><br/>
                  	phone: <input type="text" name="phone" /><br/>
                  	email: <input type="text" name="email" /><br/>
                  	gender: <input type="radio" value="male" name="gender"><label for="male" class="light">Male</label>
          <input type="radio" value="female" name="gender"><label for="female" class="light">Female</label><br/><br />
                  	
    				Choose a profile picture : <input type="file" name="image" id="image"> 
					<br /><br />
					<div align="left"><u>Official Information :</u></div>
                  	joinDate: <input type="text" name="joinDate" /><br/>
                  	password: <input type="text" name="password" /><br/>
                  	emptype: <input type="radio" value="regular" name="emptype"><label for="regular" class="light">regular</label>
          <input type="radio" value="hourly" name="emptype"><label for="hourly" class="light">hourly</label>
          <input type="radio" value="project-based" name="emptype"><label for="pBased" class="light">project-based</label><br />
          
                  	jobRole: <select id="job" name="jobRole">
          <optgroup label="Admin">
            <option value="web_maintenace_admin">web maintenace admin</option>
            <option value="office_section_admin">office section admin</option>
            
          </optgroup>
          <optgroup label="Manager">
            <option value="HR_manager">HR manager</option>
            <option value="accounts_section">accounts section</option>
            <option value="employee_management">employee management</option>
          </optgroup>
          <optgroup label="Employee">
            <option value="team_leader">team leader</option>
            <option value="field_worker">field worker</option>
            <option value="accountant">accountant</option>
          </optgroup>
        </select><br />
                  	basicPay: <select id="job" name="basicPay">
          
            <option value="50000.00">Category 1 : 50000.00</option>
            <option value="30000.00">Category 2 : 30000.00</option>
            <option value="10000.00">Category 3 : 10000.00</option>
          </select><br />
                  	hourPay: <select id="job" name="hourPay">
            <option value="1000.00">Category 1 : 1000.00 </option>
            <option value="500.00">Category 2 : 500.00</option>
            <option value="250.50">Category 3 : 250.50</option>
          </select><br />
                  	overtime:  <select id="job" name="overtime">
            <option value="1500.00">Category 1: 1500.00</option>
            <option value="750.75">Category 2 : 750.75</option>
            <option value="445.25">Category 3 : 445.25</option>
          
        </select><br/><br />
                  	
                  
					<div align="center">
                  <input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #008FAD; " value=" Add to Database "> </form>
                  </div>
                  </div>
                  </div>
                  </h3>
                   <?php
      
      $name=$_POST["name"];
	 $bday=$_POST["birthday"];
	  $curAd=$_POST["currentAd"];
	  $permAd=$_POST["permAd"];
	  $nat=$_POST["nationality"];
	  $edu=$_POST["education"];
	  $phn=$_POST["phone"];
	  $mail=$_POST["email"];
	  $gndr=$_POST["gender"];

$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name=addslashes($_FILES['image']['name']);
$image_size=getimagesize($_FILES['image']['tmp_name']);	  

	 $join=$_POST["joinDate"];
	 $pass=$_POST["password"];
	 $type=$_POST["emptype"];
	 $role=$_POST["jobRole"];
	 $basic=$_POST["basicPay"];
	 $hour=$_POST["hourPay"];
	 $over=$_POST["overtime"];
	
	
  $insert="insert into employee(name,birthDate,currentAd,permAd,nationality,education,phone,email,gender,pic,joinDate,password,type,jobRank,basicPay,hourPay,overtimePay) 
  values ('$name','$bday','$curAd','$permAd','$nat','$edu','$phn','$mail','$gndr','$image','$join','$pass','$type','$role','$basic','$hour','$over')";
  
	mysql_query($insert);
					
?>
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
