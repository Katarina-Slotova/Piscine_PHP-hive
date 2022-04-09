#!/opt/homebrew/bin/php
<?php
	if ($argc > 1)
	{
		$num_of_args = 1;
		while ($num_of_args < $argc)
		{
			echo($argv[$num_of_args]."\n");
			$num_of_args++;
		}
	}
?>