#!/opt/homebrew/bin/php 
<?php

$data = fopen('php://stdin', 'r');
while (!feof($data))
{
	echo ("Enter a number: ");
	$number = fgets($data);
	$number = trim($number, "\n");
/* 	if (feof($data))
	{
		echo("\n");
		exit();
	} */
	if ($number)
	{
		if (is_numeric($number))
		{
			if ($number % 2 == 0)
				echo ("Number ".$number." is even.");
			else
				echo ("Number ".$number." is odd.");
		}
		else
			echo ("Number ".$number." is not a number.");
		echo ("\n");
	}
}
echo ("\n");
fclose($data);

?>
