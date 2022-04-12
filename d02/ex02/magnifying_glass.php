#!/opt/homebrew/bin/php
<?php

	if ($argc == 2 && file_exists($argv[1]))
	{
		$content = file_get_contents($argv[1]);
		$pattern1 = "/(<a )(.*?)(>)(.*)(<\/a>)/";
		preg_match_all($pattern1, $content, $matches);
		//$str = implode(" ", $matches[0]);
		$pattern2 = "/(title=\")(.*?)(\")(>)(.*?)(<)/";
		preg_match_all($pattern2, $content, $matches);
		$new_content = $matches[0];
		foreach ($new_content as &$data)
			$data = strtoupper($data);
		$content = preg_replace($matches[0], $new_content, $content);
		echo($content);
	}

?>

