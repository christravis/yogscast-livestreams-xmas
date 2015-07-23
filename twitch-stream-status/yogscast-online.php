<?php

$clientID = '';
$secret = '';

while (true) {

	$c = curl_init('https://api.twitch.tv/kraken/streams/yogscast');
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($c, CURLOPT_HTTPHEADER, array('Client-ID: ' . $clientID));
	$json = curl_exec($c);
	curl_close($c);

	$data = json_decode($json);
	$data->tstamp = time();

	echo json_encode($data) . "\n";

	sleep(10);

}
