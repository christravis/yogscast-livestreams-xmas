<?php

$dataFile = 'data/twitch2014.json';

$file = fopen($dataFile, 'r');
while (($line = fgets($file)) !== false) {
	$data = json_decode($line);

	echo $data->tstamp;
	echo ',';
	echo empty($data->stream) ? 0 : $data->stream->viewers;
	echo "\n";

	continue;

	if (!empty($data->stream)) {
		echo $data->stream->viewers;
		echo "\t";
		echo $data->stream->game;
		echo "\t";
		if (!empty($data->stream->channel->status)) echo $data->stream->channel->status;
	} else {
		echo 'OFFLINE';
	}

	echo "\n";

}
fclose($file);
