<?php
 $con = mysql_connect("localhost","root","");
 if($con)
 {
 	mysql_select_db("db",$con);
 }
?>