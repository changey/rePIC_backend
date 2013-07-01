<?php 

echo 'lala';

$MyApplicationId = 'xLMDJZyTguhlyJPgP11ZcjG0SnnjCBFuRaNeZgTs';
$MyParseRestAPIKey = 'Pf9iuxz7Bh4xXHnCsZ7jg2LJlqSQue5QcLWjwHId';
$url = 'https://api.parse.com/1/push';

$headers = array(
    "Content-Type: application/json",
    "X-Parse-Application-Id: " . $MyApplicationId,
    "X-Parse-REST-API-Key: " . $MyParseRestAPIKey
);

    $handle = curl_init(); 
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($handle);
curl_close($handle);

$array = json_decode($data);

//$title =  $array->title;  


?>