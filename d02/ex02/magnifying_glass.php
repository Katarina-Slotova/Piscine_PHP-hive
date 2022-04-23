#!/usr/bin/php
<?php

	if ($argc == 2 && file_exists($argv[1]))
	{
		$file = fopen($argv[1], 'r');
		$content = "";
		while ($file && !feof($file))
		{
			$content .= fgets($file);
		}
		
		function capitalize($matches)
		{
			$str_cptlzd = strtoupper($matches[2]);
			$final_replacement = $matches[1]."".$str_cptlzd."".$matches[3];
			return ($final_replacement);
		}
		
		function replace($matches)
		{
			$pattern2 = '/( title=")(.*)(")/i';
			$pattern3 = '/(>)(.*)(<)/si';
			$new_content = $matches[0];
			$new_content = preg_replace_callback($pattern2, "capitalize", $new_content);
			$new_content = preg_replace_callback($pattern3, "capitalize", $new_content);
			return ($new_content);
		}
	}
	$pattern1 = '/(<a )(.*)(>)(.*)(<\/a>)/si';
	$content = preg_replace_callback($pattern1, "replace", $content);
	echo($content);

?>
