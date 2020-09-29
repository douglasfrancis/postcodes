<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

include( 'AbstractGeocoder.php' );
include( 'Geocoder.php' );

$geocoder = new Geocoder\Geocoder('fee5b3ef7bd5434c8ab0725284f74f91');

$result = $geocoder->geocode( '51.952659, 7.632473' , [ 'language' => 'fr' ]);

header ( 'Content-Type: application/json; charset=UTF-8' );
echo json_encode ( $result ['results'], JSON_UNESCAPED_UNICODE );



?>