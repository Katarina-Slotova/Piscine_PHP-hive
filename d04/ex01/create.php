<?php

if ($_POST["submit"] == "OK" && $_POST["login"] && $_POST["passwd"])
{
	$filename = "../private/passwd";
	if (!file_exists("../private"))
		mkdir("../private");
	$data = unserialize(file_get_contents($filename));
	$checker = 0;
	foreach ($data as $user)
	{
		if ($user["login"] === $_POST["login"])
			$checker = 1;
	}
	if ($checker)
		echo "ERROR\n";
	else 
	{
		$data[] = array("login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"]));
		file_put_contents("../private/passwd", serialize($data));
		echo "OK\n";
	}
}
else
	echo "ERROR\n";

?>
