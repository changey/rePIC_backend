<?php 

ob_start();
include_once 'config.php';

$user = mysql_real_escape_string($_GET['user']);
$pass = mysql_real_escape_string($_GET['pass']);
$pass=md5($pass); // Encrypted Password

if ($user == "" || $pass == "") {
	echo 3;
	}
else{

$query = "SELECT user,pass FROM rnmembers
WHERE user='$user' AND pass='$pass'";
$result = mysql_query($query) or die(mysql_error($con));
		if (mysql_num_rows(mysql_query($query)) == 0) {
			echo 0;
		} else {
			echo 1;
		}
}		

mysql_close($con);
ob_end_flush(); 
?>