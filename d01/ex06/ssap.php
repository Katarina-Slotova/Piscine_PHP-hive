#!/opt/homebrew/bin/php
<?php
	function ft_remove_space($array)
	{
		if ($array != " ")
			return ($array);
		else
			return ;
	}

	function ft_split($str)
	{
		$array = explode(" ", $str);
		$cleaned_array = array_filter($array, "ft_remove_space");
		return ($cleaned_array);
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
		sort($collect_to_array);
		while ($counter < count($collect_to_array))
		{
			echo($collect_to_array[$counter]."\n");
			$counter++;
		}
	}
?>
