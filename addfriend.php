<?php

$message = $_POST['message'];
$user =$_GET['user'];
$friend=$_GET['friend'];

include_once 'config.php';

$query = "INSERT INTO friends (user, friend) VALUES('changey', 'heather')";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>