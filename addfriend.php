<?php

$user =$_GET['user'];
$friend=$_GET['friend'];

include_once 'config.php';

$query = "SELECT * FROM rnmembers WHERE user='$friend'";
		if (mysql_num_rows(mysql_query($query))==0) {
			//$error = "That username already exists<br /><br />";
			echo 0;
		} else {
			$result = mysql_query($query) or die(mysql_error($con));
		    if (!$result) {
	    		die("Query to show fields from table failed");
	    	}
	    	while ($row = mysql_fetch_row($result)) {
			  // $row[3];
<<<<<<< HEAD
			    //$friend=$row[0];
=======
			 //   $friend_id=$row[0];
>>>>>>> 355d2a8021b240524bc8340bbb04ca00cea2ea83
			
		    	$query = "INSERT INTO friends (user, friend) VALUES('$user', '$friend')";
		    	mysql_query($query);
		    	echo 1;
			}
			//header("Location: index2.php");
			
		}

// $query = "INSERT INTO friends (user, friend_id) VALUES('changey', 'heather')";
			// mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));


?>