<?php

	if ($_POST["submit"] == "OK" && $_POST["login"] && $_POST["passwd"])
	{
		$filename = "../private/passwd";
		if (!file_exists("../private"))
			echo("ERROR\n");
		$data = unserialize(file_get_contents($filename));
		foreach ($data as $user)
		{
			if ($user["login"] === $_POST["login"])
				echo("ERROR\n");
		}
		$data[] = array("login" => $_POST["login"], "passwd" => hash("whirpool", $_POST["passwd"]));
		file_put_contents($filename, serialize($data));
		echo("OK\n");
	}
	else
		echo("ERROR\n");
?>