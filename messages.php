<?php

$message = $_GET['message'];
$sender =$_GET['sender'];
$receiver =$_GET['receiver'];
$time =$_GET['time'];
$url =$_GET['url'];

// $message = $_POST['message'];
// $sender =$_POST['sender'];
// $receiver =$_POST['receiver'];
// $time =$_POST['time'];
// $url =$_POST['url'];


//$message='trial';

include_once 'config.php';

include('http://107.22.99.26/startup/schedule.php?alert=lala');


$receiver_array="[\"jill\",\"jace\"]";
$time="2013-07-03 22:48:29";

$receiver_decode = json_decode($receiver_array);

echo count($receiver_decode);
$length=count($receiver_decode);

for($i=0;$i<$length;$i++){
	echo $receiver_decode[$i];
	$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', '$receiver_decode[$i]', '$time','baba','dada')";
			mysql_query($query);
}

//$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', '$receiver', 'lala','baba','dada')";
//			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>