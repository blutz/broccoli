<?php 

// Public functions
function latest_tweet() {
	get_latest_tweet();
}

// Private functions
function get_latest_tweet() {
	$twitter_url = 'https://twitter.com/statuses/user_timeline/uclacpo.xml?count=1';
	$xml = simplexml_load_file($twitter_url);
	if(!isset($xml))
		return "Failed to connect to twitter.";
		
	echo $xml->status->text;
}

?>