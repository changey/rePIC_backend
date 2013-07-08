<?php

$message = $_GET['message'];
$sender =$_POST['sender'];
$aliases =$_POST['receivers'];
$time =$_POST['time'];
$url =$_GET['url'];

$alert=$_POST['captions'];

if (strcmp($alert, "Captions")==0){
	$alert="";
	//echo 'dada';
}
// $message = $_POST['message'];
// $sender =$_POST['sender'];
// $receiver =$_POST['receiver'];
// $time =$_POST['time'];
// $url =$_POST['url'];


//$message='trial';

// echo $aliases;
 
$aliases_decode = json_decode($aliases);

//echo $aliases_decode;
 
$length=count($aliases_decode);

//echo $length;

for($i=0;$i<$length;$i++){
	echo $aliases_decode[$i];

}

include_once 'config.php';

 define('APPKEY','KGEg7t5YQyitKZhJuM-jSg'); 
 define('PUSHSECRET', 'lNY11NaZSTaF_YTpU0Ajaw'); // Master Secret
 define('PUSHURL', 'https://go.urbanairship.com/api/push/'); 

 $contents = array(); 
 //$contents['badge'] = "+1"; 
 $contents['alert'] = $alert; 
 
 //echo $aliases;
 $contents['sound'] = "cow"; 
 $aliases_clean = str_replace("\\", "", $aliases);
 //echo $aliases_clean;
 
// $push = array("aps" => $contents,
 //               "schedule_for"=>"2013-06-30 00:08:00"); 
 $sch_contents=array();
 $sch_contents[0]["alias"]="changey3";
 $sch_contents[0]["scheduled_time"]="2013-06-30 20:28:00";
 
 $ali_contents=array("changey", "jace");
 $push = array("aps" => $contents, "aliases" => $aliases_decode, "schedule_for"=> $time); 
 // $push = array("aps" => $contents, "aliases" => $ali_contents); 

 $json = json_encode($push); 
 echo $json;

 $session = curl_init(PUSHURL); 
 curl_setopt($session, CURLOPT_USERPWD, APPKEY . ':' . PUSHSECRET); 
 curl_setopt($session, CURLOPT_POST, True); 
 curl_setopt($session, CURLOPT_POSTFIELDS, $json); 
 curl_setopt($session, CURLOPT_HEADER, False); 
 curl_setopt($session, CURLOPT_RETURNTRANSFER, True); 
 curl_setopt($session, CURLOPT_HTTPHEADER, array('Content-Type:application/json')); 
 $content = curl_exec($session); 
 echo $content; // just for testing what was sent

 // Check if any error occured 
 $response = curl_getinfo($session); 
 if($response['http_code'] != 200) { 
     echo "Got negative response from server, http code: ". 
     $response['http_code'] . "\n"; 
 } else { 

     echo "Wow, it worked!\n"; 
 } 

 curl_close($session);
 

$query = "SELECT * FROM messages";
$messages_number=mysql_num_rows(mysql_query($query));

$receiver_decode = json_decode($aliases);
$receiver_number=count($receiver_decode);

echo ",$messages_number,$receiver_number";
$length=count($receiver_decode);


for($i=0;$i<$length;$i++){
	//echo $receiver_decode[$i];
	$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('$sender', '$receiver_decode[$i]', '$time','baba','$alert')";
			mysql_query($query);
}

//$query = "INSERT INTO messages (sender, receiver, time, url, captions) VALUES('changey', '$receiver', 'lala','baba','dada')";
//			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

//echo 'Data inserted successfully!';
?>