#!/usr/bin/php
<?php

	$find_this = $argv[1];
	unset($argv[1]);
	$rev_arr = array_reverse($argv);
	foreach ($rev_arr as $value)
	{
		$rev_arr = explode(":", $value);
		if ($find_this === $rev_arr[0] )
			echo ($rev_arr[1]."\n");
	}

?>
