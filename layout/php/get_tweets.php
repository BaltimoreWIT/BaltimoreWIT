<?php

require_once(__DIR__.'/twitter_proxy.php');

// Twitter OAuth Config options
$oauth_access_token = '3177618922-kF5sOZAxU7CQtWU82YysC0dx6nOKE5p3NzbL6JM';
$oauth_access_token_secret = 'RfEYfyhJJmSLYQ3NQmxjSuZRqMldXyqTrzsm6wjOq8pkb';
$consumer_key = 'bycFB2KOWKZItkKhx1MUnS8Qu';
$consumer_secret = 'Nu7nSeZr1dbppJIxHI3eqETRrI4qEM2TF6IDOUBfYpfWfjt57k';
$user_id = '3177618922';
$screen_name = 'baltimorewit';
$count = 5;

$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;

// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count							// The number of tweets to pull out
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);

echo $tweets;

?>