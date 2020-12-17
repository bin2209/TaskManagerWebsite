<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('5874604497-lbaqkfe65bp4ciev2dfob0ku4r3asrr7.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('zKMQkhzBmU95XSNZ-N0bUkTF');

//Set the OAuth 2.0 Redirect URI
// $google_client->setRedirectUri('http://localhost/resblog/blogadmin/logingg/index.php');
$google_client->setRedirectUri('http://localhost/resblog/blogadmin/logingg/index.php');
// $google_client->setRedirectUri('https://taskvn.com/blogadmin/logingg/index.php');


//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
