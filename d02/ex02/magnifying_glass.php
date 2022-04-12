#!/opt/homebrew/bin/php
<?php

	if ($argc == 2 && file_exists($argv[1]))
	{
		$content = file_get_contents($argv[1]);
		$pattern1 = "/<a>[\s](.*?)<\/a>/";
		preg_match($pattern1, $content, $matches);
		$str = implode(" ", $matches);
		$pattern2 = "/<title>(.*?)<\/title>/";
		preg_match($pattern2, $str, $matches);
		$new_content = $matches;
		foreach ($new_content as &$data)
			$data = strtoupper($data);
		$content = preg_replace($matches, $new_content, $content);
		echo($content);
	}

?>

