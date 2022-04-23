#!/usr/bin/php
<?php

	if ($argc != 2)
	{
		echo ("Incorrect Parameters\n");
	}
	else
	{
		$params = sscanf($argv[1], "%d %c %d");
		if (is_numeric($params[0]) && $params[1] && is_numeric($params[2]))
		{
			if ($params[1] == "+")
				echo ($params[0] + $params[2]);
			else if ($params[1] == "-")
				echo ($params[0] - $params[2]);
			else if ($params[1] == "*")
				echo ($params[0] * $params[2]);
			else if ($params[1] == "/")
			{
				if ($params[2] == 0)
					echo ("Division by zero\n");
				else
					echo ($params[0] / $params[2]);
			}
			else if ($params[1] == "%")
			{
				if ($params[2] == 0)
					echo ("Division by zero\n");
				else
					echo ($params[0] % $params[2]);
			}
			echo("\n");
		}
		else
			echo ("Syntax Error\n");
	}

?>