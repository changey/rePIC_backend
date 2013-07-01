<?php /*
 * process whatever you want here but don't make any output! *
 */

ob_start();
include_once 'config.php';

$token = mysql_real_escape_string($_GET['token']);

$query = "SELECT * FROM devices WHERE token='$token'";
if (mysql_num_rows(mysql_query($query))) {
	//$error = "That token already exists<br /><br />";
	echo 0;
} else {

	$query = "INSERT INTO devices (token, userid) VALUES('$token', 'changey')";
	mysql_query($query);
	echo 1;
}

mysql_close($con);
ob_end_flush();
?>