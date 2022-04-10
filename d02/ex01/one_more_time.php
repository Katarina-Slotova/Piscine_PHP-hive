#!/opt/homebrew/bin/php
<?php

	if ($argc > 1)
	{
		$array = explode(" ", $argv[1]);
		$month = array("", "janvier", "février", "mars", "avril", "mai", "juin", 
		"juillet", "août", "septembre", "octobre", "novembre", "decembre"); // with or without correct grammar????
		$array[2] = array_search(strtolower($array[2]), $month);
		array_shift($array);
		$str = implode(".", $array);
		$time = strtotime($str);
		if ($time)
			echo($time)."\n";
		else
			echo("Wrong Format\n");
	}

?>