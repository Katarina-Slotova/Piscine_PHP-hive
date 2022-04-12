#!/opt/homebrew/bin/php
<?php

function ft_remove_space($array)
{
	if ($array != " ")
		return ($array);
	else
		return ;
}

$people = array();

foreach ($people as $name)
{
	date_default_timezone_set('Europe/Helsinki');
	$date = date('d-m-y h:i:s');
	$data = explode(" ", $data[0]);
	$data = array_filter($data, "ft_remove_space");
	echo($data);
}

?>