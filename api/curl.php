<?php

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/topstories.json');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 		// returns the transfer(result) as string

	$topStoryIds = curl_exec($ch);
	if (curl_getinfo($ch)['http_code'] !== 200) {
		die('Something went wrong!');
	}


	$topTenStoryIds = array_slice(json_decode($topStoryIds), 0, 10);

	echo '<h3>Top 10 Hacker News stories on ', date('dS M Y'), ' using cURL<br /></h3>';
	echo "<ol>";

	foreach ($topTenStoryIds as $story) {
		curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $story . '.json');
		$story = curl_exec($ch);

		if (curl_getinfo($ch)['http_code'] === 200) {
			$story = json_decode($story);
			echo "<li><a href=\"{$story->url}\" target=\"_blank\">{$story->title}</a> By {$story->by}</li>";
		}
	}

	echo "</ol>";

	curl_close($ch);
?>