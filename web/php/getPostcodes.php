<?php

$url= 'http://api.geonames.org/postalCodeSearchJSON?postalcode=' . $_REQUEST['postcode'] . '&username=douglasfrancis';

$handle = curl_init();
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_URL,$url);

$result=curl_exec($handle);

curl_close($handle);

$decode = json_decode($result,true);	

$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['data'] = $decode['postalCodes'];

header('Content-Type: application/json; charset=UTF-8');

echo json_encode($output); 

?>
