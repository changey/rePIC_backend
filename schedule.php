<?php

 //$alias = $_GET['alias'];
 $alert=$_GET['alert'];
 $aliases=$_POST['receivers'];
 
 // echo $aliases;
//  
// $aliases_decode = json_decode($aliases);
// 
// echo $aliases_decode;
//  
// $length=count($aliases_decode);
// 
// echo $length;
// 
// for($i=0;$i<$length;$i++){
	// echo $aliases_decode[$i];
// 
// }

//shell_exec('http://107.22.99.26/startup/schedule.php?alert=lala');
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "http://172.17.164.70//startup/schedule.php?alert=$alert");
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 
// $output = curl_exec($ch);
// curl_close($ch);


 define('APPKEY','KGEg7t5YQyitKZhJuM-jSg'); 
 define('PUSHSECRET', 'lNY11NaZSTaF_YTpU0Ajaw'); // Master Secret
 define('PUSHURL', 'https://go.urbanairship.com/api/push/'); 

 $contents = array(); 
 //$contents['badge'] = "+1"; 
 $contents['alert'] = $alert; 
 $contents['sound'] = "cow"; 
 //$contents['alias'] = $alias;
 
// $push = array("aps" => $contents,
 //               "schedule_for"=>"2013-06-30 00:08:00"); 
 $sch_contents=array();
 $sch_contents[0]["alias"]="changey3";
 $sch_contents[0]["scheduled_time"]="2013-06-30 20:28:00";
 
 $ali_contents=array("changey", "jace");
 $push = array("aps" => $contents, "aliases" => $ali_contents, "schedule_for"=> "2013-06-30 22:31:00"); 
 // $push = array("aps" => $contents, "aliases" => $ali_contents); 

 $json = json_encode($push); 
 //echo $json;

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
 
?>
