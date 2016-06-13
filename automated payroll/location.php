<?php 

include 'db_connect.php';

    // connecting to db
 $db = new DB_CONNECT();
 
 $user_id=$_POST["txtvol"];
 $q="selcet * from user";
 $r=mysql_query($q);
if($user_id==$r["name"]){
$response = array();
$result = mysql_query("SELECT *FROM history") or die(mysql_error());
// check for empty result
     if (mysql_num_rows($result) > 0)   
    // looping through all results
    // products node
    $response["output"] = array();

           while ($row = mysql_fetch_array($result)) {
        // temp user array
        $output = array();
        //$output["username"] = $row["username"];
        $output["email"] = $row["email"];
         $output["bag"] = $row["bag"];


        // push single product into final response array
        array_push($response["output"], $output);
                                                }
    // success
   $response["success"] = 1;
$response["message"] = "yess";

    // echoing JSON response
    echo json_encode($response);
$lat=$_POST["txtemail"];
$long=$_POST["remark"];
$dat=$_POST["bag"];
$confirm=$_POST["find"];
$sql_save = "insert into session(latitude,longitude,date,confirm,name) values(
								'$lat','$long','$dat','$confirm','$user_id')"; 
mysql_query($sql_save) ;

$response["success"] =1; 
$response["message"]="Success";
die(json_encode($response)); 
                    
}

mysql_close(); 

?>