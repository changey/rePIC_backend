<?php

$message = $_POST['message'];
$sender =$_POST['sender'];
$receiver =$_POST['receiver'];
$time =$_POST['time'];
$url =$_POST['url'];

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

echo 'Data inserted successfully!';
?>