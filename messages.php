<?php

$message = $_GET['message'];
$sender =$_GET['sender'];
$receiver =$_GET['receiver'];
$time =$_GET['time'];
$url =$_GET['url'];


//$message='trial';

include_once 'config.php';

// $somearg = escapeshellarg('blah');
// exec("php file2.php $somearg > /dev/null &");

$receiver_array="[\"jill\",\"jace\"]";
$time="2013-07-03 22:48:29";

$receiver_decode = json_decode($receiver_array);

echo count($receiver_decode);
$length=count($receiver_decode);

for($i=0;$i<$length;$i++){
	echo $receiver_decode[$i];
	$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', '$receiver_decode[$i]', 'lala','baba','dada')";
			mysql_query($query);
}

//$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', '$receiver', 'lala','baba','dada')";
//			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>