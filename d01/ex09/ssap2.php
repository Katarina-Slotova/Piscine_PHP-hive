#!/usr/bin/php
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
		return ($cleaned_array);
	}

	function ft_compare($str1, $str2)
	{
		$len = min($str1, $str2);
		$str1 = strtolower($str1);
		$str2 = strtolower($str2);
		while ($i < $len && $str1[$i] === $str2[$i])
			$i++;
		if ($i !== $len)
		{
			$substr1 = substr($str1, $i, strlen($str1));
			$substr2 = substr($str2, $i, strlen($str2));
		}
		else
		{
			$substr1 = $str1;
			$substr2 = $str2;
		}
		if (ctype_alpha($substr1[0]))
		{
			if (ctype_alpha($substr2[0]))
				return ($substr1[0] <=> $substr2[0]);
			else
				return (-1);
		}
		if (ctype_digit($substr1[0]))
		{
			if (ctype_digit($substr2[0]))
				return ($substr1[0] <=> $substr2[0]);
			else if (ctype_alpha($substr2[0]))
				return (1);
			else
				return (-1);
		}
		if (ctype_alnum($substr2[0]))
			return (1);
		else
			return ($substr1[0] <=> $substr2[0]);
	}

	if ($argc > 1)
	{
		$num_of_args = 1;
		$counter = 0;
		$collect_to_array = array();
		while ($num_of_args < $argc)
		{
			$splitted_array = ft_split($argv[$num_of_args]);
			$collect_to_array = array_merge($collect_to_array, $splitted_array);
			$num_of_args++;
		}
		usort($collect_to_array, "ft_compare");
		while ($counter < count($collect_to_array))
		{
			echo($collect_to_array[$counter]."\n");
			$counter++;
		}
	}
?>
