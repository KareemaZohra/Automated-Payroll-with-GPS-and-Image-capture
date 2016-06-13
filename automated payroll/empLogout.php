<?php 
include 'db_connect.php';
 $db = new DB_CONNECT();
//image part	
	error_reporting(E_ALL);
if(isset($_POST['ImageName'])){
$imgname = $_POST['ImageName'];
$sender = $_POST['UserName'];
$imsrc = base64_decode($_POST['base64']);
$fp = fopen($imgname, 'w');
fwrite($fp, $imsrc);
if(fclose($fp)){
	echo "success uploading image";
	echo "success uploading image";
	$dirname = "";
$images = glob($dirname."*.jpg");
foreach($images as $image) {
	$_FILES['image']['tmp_name']=$image;
	$_FILES['image']['name']=$image;
	$file=$_FILES['image']['tmp_name'];
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name=addslashes($_FILES['image']['name']);
	$image_size=getimagesize($_FILES['image']['tmp_name']);

	if(!$insert= mysql_query("INSERT INTO image_table VALUES ('',CURDATE(),'$sender','$image','$image_name')"))
		echo "Couldn't upload";
	else
	{
		echo "Image uploaded.";
	}
}
}else{
	echo "Error uploading image";
}

}

//other part
$sql="select * from time where name='$sender' order by id desc";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$lastId=$row["id"];
$sql2="UPDATE time 
      	SET logout=NOW()
		WHERE id='$lastId'";
mysql_query($sql2);
$sql3="UPDATE time 
      	SET value=0
		WHERE id='$lastId'";
	mysql_query($sql3);	
?>