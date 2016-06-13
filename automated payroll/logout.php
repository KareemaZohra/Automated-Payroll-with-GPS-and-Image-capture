<?php
session_start();
session_destroy();
header('Location:index.php');
setcookie("user", "", time()-3600);
?>