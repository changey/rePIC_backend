<?php

$message = $_POST['message'];
$sender =$_POST['sender'];
$receiver =$_POST['receiver'];
$time =$_POST['time'];
$url =$_POST['url'];

//$message='trial';

include_once 'config.php';

$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', 'heather', 'lala','baba','dada')";
			mysql_query($query);

echo 'Data inserted successfully!';
?>