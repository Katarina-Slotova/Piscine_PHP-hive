#!/usr/bin/php
<?php

	$data = fopen('php://stdin', 'r');
	while (!feof($data))
	{
		echo ("Enter a number: ");
		$number = fgets($data);
		if ($number)
		{
			$number = trim($number, "\n");
			if (is_numeric($number))
			{
				if ($number % 2 == 0)
					echo ("The number ".$number." is even");
				else
					echo ("The number ".$number." is odd");
			}
			else
				echo ("'".$number."'"." is not a number");
			echo ("\n");
		}
	}
	echo ("\n");
	fclose($data);

?>
