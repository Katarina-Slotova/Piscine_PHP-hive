#!/opt/homebrew/bin/php
<?php
	function ft_remove_space($array)
	{
		if ($array != " ")
			return ($array);
		else
			return ;
	}

	if ($argc == 2)
	{
		$str_to_arr = explode(" ", $argv[1]);
		$str_to_arr = array_filter($str_to_arr, "ft_remove_space");
		$arr_to_str = implode(" ", $str_to_arr);
		echo($arr_to_str);
		echo("\n");
	}
?>