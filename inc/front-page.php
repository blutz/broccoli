<?php 

// Public functions
function latest_tweet() {
	get_latest_tweet();
}

// Private functions
function get_latest_tweet() {
	$twitter_url = 'http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=uclacpo&count=1';
	$xml = simplexml_load_file($twitter_url);
	if(!isset($xml))
		return "Failed to connect to twitter.";
		
	echo $xml->status->text;
}

?>