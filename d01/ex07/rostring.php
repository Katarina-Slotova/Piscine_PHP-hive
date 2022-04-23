#!/usr/bin/php
<?php

	function ft_remove_space($array)
	{
		if ($array != " ")
			return ($array);
		else
			return;
	}

	if ($argc > 1)
	{
		$str_to_arr = explode(" ", $argv[1]);
		$cleaned_array = array_filter($str_to_arr, "ft_remove_space");
		array_push($cleaned_array, array_shift($cleaned_array));
		$arr_to_str = implode(" ", $cleaned_array);
		echo ($arr_to_str."\n");
	}

?>
