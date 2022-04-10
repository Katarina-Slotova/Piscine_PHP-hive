#!/opt/homebrew/bin/php
<?php

	if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['passwd'])
	{
		$filename = '../private/passwd'
		if (!file_exists($filename)
		{
			echo("ERROR\n");
			return;
		}
		$data = unserialize(file_get_contents($filename));
		foreach ($data as $user)
		{
			if ($user['login'] === $_POST['login'])
			{
				echo("ERROR\n");
				return;
			}
		}
		$data[] = array("login" => $_POST['login'], "passwd" => hash($_POST['passwd'])); // add hashing algo after watching elearning video
		file_put_contents($filename, serialize($data));
		echo("OK\n");
	}
	else
	{
		echo("ERROR\n");
		return;
	}
?>