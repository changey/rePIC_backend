<?php

$user =$_GET['user'];
$friend=$_GET['friend'];

include_once 'config.php';

$query = "INSERT INTO friends (user, friend) VALUES('changey', 'heather')";
			mysql_query($query);

echo 'Data inserted successfully!';
?>