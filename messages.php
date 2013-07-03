<?php

$message = $_POST['message'];
$sender =$_POST['sender'];
$receiver_array =$_POST['receiver'];
$time =$_POST['time'];
$url =$_POST['url'];

//$message='trial';
// connect to MySQL//  $db = mysql_connect('127.0.0.1', 'root2','root') or//      die ('Unable to connect. Check your connection parameters.');
include_once 'config.php';

$receiver_array="[\"jill\"]";

$receiver_decode = json_decode($receiver_array);

echo count($receiver_decode);

//$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', '$receiver', 'lala','baba','dada')";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>