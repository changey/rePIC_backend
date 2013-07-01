<?php

//$message='trial';
// connect to MySQL//  $db = mysql_connect('127.0.0.1', 'root2','root') or//      die ('Unable to connect. Check your connection parameters.');
include_once 'config.php';

$query = "INSERT INTO rnmembers (user, pass, name) VALUES('changey', 'a', 'Eric Chang')";
			mysql_query($query);
			
$query = "INSERT INTO rnmembers (user, pass, name) VALUES('jace', 'a', 'Jace Lieberman')";
			mysql_query($query);
			
$query = "INSERT INTO rnmembers (user, pass, name) VALUES('heather', 'a', 'Heather Wilk')";
			mysql_query($query);
			
$query = "INSERT INTO rnmembers (user, pass, name) VALUES('jill', 'a', 'Jill Rosok')";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>