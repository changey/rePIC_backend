<?php

$message = $_POST['message'];
$sender =$_POST['sender'];
$receiver =$_POST['receiver'];
$time =$_POST['time'];
$url =$_POST['url'];
$messages_number=$_POST['messages_number'];
$receiver_number=$_POST['receiver_number'];
echo $messages_number;

//$message='trial';
// connect to MySQL//  $db = mysql_connect('127.0.0.1', 'root2','root') or//      die ('Unable to connect. Check your connection parameters.');
include_once 'config.php';

// $query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', 'heather', 'lala','baba','dada')";
			// mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
	if (is_uploaded_file($_FILES['image']['tmp_name'])) {
		// Temporary file name stored on the server
		$tmpName = $_FILES['image']['tmp_name'];
		$imgData = file_get_contents($_FILES['image']['tmp_name']);
		$size = getimagesize($_FILES['image']['tmp_name']);
		//echo $imgData;

		// Read the file
		$fp = fopen($tmpName, 'r');
		$data = fread($fp, filesize($tmpName));
		$data = addslashes($data);
		fclose($fp);
		
		$query = "SELECT * FROM tbl_images";
		$file_number=mysql_num_rows(mysql_query($query))+1;
		//echo mysql_num_rows(mysql_query($query))+1;
		

		// Create the query and insert
		// into our database.
		
		
		$query = "INSERT INTO tbl_images ";
		$query .= "(url) VALUES ('http://10.0.2.45/startup/uploads/$file_number.jpg')";
		$results = mysql_query($query, $con);

		// Print results
		print "Thank you, your file has been uploaded.";
	} else {
		print "No image selected/uploaded";
	}
	
	$myparam = $_POST['image'];     //getting image Here
   $mytextLabel= $_POST['filenames'];   //getting textLabe Here
   echo $myparam;
   echo $mytextLabel; 

	$target_path = "uploads/";

	//$target_path = $target_path . basename($_FILES['image']['name']);
	$target_path = $target_path .  $file_number . '.jpg';
	echo $target_path;

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
		echo "The file " . basename($_FILES['image']['name']) . " has been uploaded";
		//echo "http://107.22.99.26/startup/uploads/$file_number.jpg";
		
	} else {
		echo "There was an error uploading the file, please try again!";
	}

}
  $receiver_number_i=intval($receiver_number);

  $messages_number_i=intval($messages_number);
  echo $messages_number_i;
  echo $receiver_number_i;
  
  for($i=0;$i<$receiver_number_i;$i++){
  	$messages_number_i=$messages_number_i+1;

  $query = "UPDATE messages SET url='http://107.22.99.26/startup/uploads/$file_number.jpg' WHERE id=$messages_number_i";
// if (mysql_num_rows(mysql_query($query)) == 0) {
	// //$error = "That username already exists<br /><br />";
	// echo 0;
// } else {
	$result = mysql_query($query) or die(mysql_error($con));
  }
	//echo $result;
	// if (!$result) {
		// die("Query to show fields from table failed");
	// }
	// $stack = array();
// 
// 
	// while ($row = mysql_fetch_row($result)) {
		// // $row[3];
		// //$user_id = $row[2];
		// $data = array("id" => $row[0], "sender" => $row[1], "receiver" => $row[2], "url" => $row[3], "time" => $row[4], "captions" => $row[5]);
// 		
		// array_push($stack, $data);
// 		 
		// //$query = "INSERT INTO friends (user, friend_id) VALUES('$user', $friend_id)";
		// mysql_query($query);
	// }

echo 'Data inserted successfully!';
?>