<?php  

$sname = "sql100.epizy.com";
$uname = "epiz_31901852";
$password = "HYBjvfvxCB";
$db_name = "epiz_31901852_connect";
$c = mysqli_connect($sname, $uname, $password, $db_name);

if (!$c) {
	echo "Connection failed!";
	exit();
}