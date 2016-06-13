<?php
include 'db_connect.php';
// connecting to db
 $db = new DB_CONNECT();
 
$uemail=$_POST["txtUName"];
$userpass=$_POST["txtPass"];

$t1=mysql_query("SELECT * FROM new where name='$uemail'");
$query = mysql_fetch_array($t1);
$result ="SELECT * from user where name='$uemail' and pass=$userpass";
$sql1=mysql_query($result);
$row = mysql_fetch_array($sql1);

if (!empty($row))
 {  $response["output"] = array();
$output= array();
 $output["location"] =$query["place"];
array_push($response["output"], $output);
$response["success"] =1; 
$response["message"]="Success";

$var="insert into time(name,date,login,value) values('$uemail',CURDATE(),NOW(),1)";
mysql_query($var);

die(json_encode($response)); }
 
else{ 
$response["success"] = 0;
$response["message"]="failure";
die(json_encode($response));
 }

mysql_close();   
?>




