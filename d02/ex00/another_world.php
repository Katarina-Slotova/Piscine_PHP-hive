#!/opt/homebrew/bin/php
<?php

	function ft_remove_space($array)
	{
		if ($array != " ")
			return ($array);
		else
			return ;
	}

	if ($argc > 1)
	{
		$argv[1] = str_replace("\t", " ", $argv[1]);
		$argv[1] = str_replace("\r", " ", $argv[1]);
		$argv[1] = str_replace("\v", " ", $argv[1]);
		$argv[1] = str_replace("\f", " ", $argv[1]);
		$argv[1] = str_replace("\n", " ", $argv[1]);
		$array = explode(" ", $argv[1]);
		$array = array_filter($array, "ft_remove_space");
		$str = implode(" ", $array);
		echo($str."\n");
	}

?>
