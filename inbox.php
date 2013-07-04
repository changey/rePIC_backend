<?php

$user = $_GET['user'];
$friend = $_GET['friend'];

include_once 'config.php';

$query = "SELECT * FROM messages WHERE receiver='jill'";
// if (mysql_num_rows(mysql_query($query)) == 0) {
	// //$error = "That username already exists<br /><br />";
	// echo 0;
// } else {
	$result = mysql_query($query) or die(mysql_error($con));
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$stack = array();


	while ($row = mysql_fetch_row($result)) {
		// $row[3];
		//$user_id = $row[2];
		$data = array("id" => $row[0], "sender" => $row[1], "receiver" => $row[2], "url" => $row[3], "time" => $row[4], "captions" => $row[5]);
		
		array_push($stack, $data);
		//echo $user_id;
        
		// $query = "SELECT * FROM freinds WHERE id='$user'";
		// $push = array("aps" => $contents, "aliases" => $ali_contents, "schedule_for" => "2013-06-30 22:31:00");
		// // $push = array("aps" => $contents, "aliases" => $ali_contents);
// 
		 
		//$query = "INSERT INTO friends (user, friend_id) VALUES('$user', $friend_id)";
		mysql_query($query);
	}
	
	$json = json_encode($stack);
		 
	echo $json;
	//header("Location: index2.php");

// }

// $query = "INSERT INTO friends (user, friend_id) VALUES('changey', 'heather')";
// mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));
?>