<?php

$message = $_GET['message'];
$sender =$_GET['sender'];
$receiver =$_GET['receiver'];
$time =$_GET['time'];
$url =$_GET['url'];

//$message='trial';

include_once 'config.php';

$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', 'heather', 'lala','baba','dada')";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>