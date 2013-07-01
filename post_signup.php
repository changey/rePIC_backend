<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$user = mysql_real_escape_string($_GET['user']);
$pass = mysql_real_escape_string($_GET['pass']);
$pass2=$pass;
$pass=md5($pass);
//$email = $_GET['email'];
if ($user == "" || $pass2 == "") {
	echo 0;
	}
else{
$query = "SELECT * FROM rnmembers WHERE user='$user'";
		if (mysql_num_rows(mysql_query($query))) {
			//$error = "That username already exists<br /><br />";
			echo 0;
		} else {
			$query = "INSERT INTO rnmembers (user, pass, role) VALUES('$user', '$pass', 0)";
			mysql_query($query);
			echo 1;
			//header("Location: index2.php");
		}
}
		

mysql_close($con);
ob_end_flush(); 
?>