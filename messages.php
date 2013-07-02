<?php

$message = $_POST['message'];
$sender =$_POST['sender'];
$receiver =$_POST['receiver'];
$time =$_POST['time'];
$url =$_POST['url'];

//$message='trial';

include_once 'config.php';

$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', 'heather', 'lala','baba','dada')";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>