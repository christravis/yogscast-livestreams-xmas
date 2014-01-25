<?php

require_once('pubnub/3.4/Pubnub.php');

$pubnub = new Pubnub(
	'demo',  ## PUBLISH_KEY
	'6b5eeae3-796b-11df-8b2d-ef048cc31d2e',  ## SUBSCRIBE_KEY
	'',      ## SECRET_KEY
	'',      ## CIPHER_KEY
	false,    ## SSL_ON?
	'humble.pubnub.com'
);

$pubnub->subscribe(array(
	'channel'  => 'humbleyogscast',        ## REQUIRED Channel to Listen
	'callback' => function($message) {  ## REQUIRED Callback With Response
		echo json_encode($message) . "\n";
		return true;         ## Keep listening (return false to stop)
	}
));
