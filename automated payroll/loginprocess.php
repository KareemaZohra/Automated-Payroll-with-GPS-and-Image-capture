<?php
include "database.php";
session_start();
$username= $_POST['id'];
 $password = $_POST['pass'];
 
 	login($username,$password);
 
 
function login($name,$pass)
 {
     $sql="select * from user where name='$name'";
	 $result = mysql_query($sql);
	 while($row = mysql_fetch_array($result))
	 {
	 	if($row['pass']==$pass)
		{
		if($row['name']=='karee' && $row['pass']=='1234')
		{
			$_SESSION['id'] = $row['id'];
		header('Location:admin.php');
		}
		else {
			header('Location:index.php?error=yes');
		}
	}
	else {
			header('Location:index.php?error=yes');
		}	
	 }
 }
?>
