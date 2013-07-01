<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$query = "SELECT * FROM tbl_images";
		echo mysql_num_rows(mysql_query($query));
		

mysql_close($con);
ob_end_flush(); 
?>