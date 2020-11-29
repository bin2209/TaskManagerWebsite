<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '1032892983877058',
	'app_secret' => '6033531d0290a6737cd658d39e12d2fa',
	'default_graph_version' => 'v2.10'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>