<?php

	function ft_remove_space($array)
	{
		if ($array != " ")
			return ($array);
		else
			return;
	}

	function ft_split($str)
	{
		$array = explode(" ", $str);
		$cleaned_array = array_filter($array, "ft_remove_space");
		sort($cleaned_array);
		return ($cleaned_array);
	}

?>
