<?php
include 'db_connect.php';
 $db = new DB_CONNECT();
echo "hi!";
error_reporting(E_ALL);
if(isset($_POST['ImageName'])){
$imgname = $_POST['ImageName'];
$sender = $_POST['UserName'];
$imsrc = base64_decode($_POST['base64']);
$fp = fopen($imgname, 'w');
fwrite($fp, $imsrc);
if(fclose($fp)){
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
		$lastid=mysql_insert_id();
		echo "Image uploaded.";
	}
}
}else{
	echo "Error uploading image";
}

}

?>