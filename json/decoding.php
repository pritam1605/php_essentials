<?php

	$storyIds = json_decode(file_get_contents('https://hacker-news.firebaseio.com/v0/topstories.json'));

	$topTenStories = array_slice($storyIds, 0, 10);

	echo '<h3>Top 10 Hacker News stories on ', date('dS M Y'), ' using file_get_contents<br /></h3>';
	echo "<ol>";
		foreach ($topTenStories as $id) {
			$story = json_decode(file_get_contents('https://hacker-news.firebaseio.com/v0/item/' . $id . '.json'));
			echo "<li><a href=\"{$story->url}\" target=\"_blank\">{$story->title}</a> By {$story->by}</li>";
		}
	echo "</ol>";

?>