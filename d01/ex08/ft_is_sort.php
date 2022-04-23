<?php

	function ft_is_sort($array)
	{
		$i = 0;
		$sorted_array = $array;
		sort($sorted_array);
		$array_len = count($array);
		while ($i < $array_len)
		{
			if ($array[$i] != $sorted_array[$i])
				return (0);
			$i++;
		}
		return (1);
	}

?>
