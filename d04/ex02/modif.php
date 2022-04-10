#!/opt/homebrew/bin/php
<?php

if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
	{
		$checker = 0;
		$filename = '../private/passwd'
		if (!file_exists($filename)
		{
			echo("ERROR\n");
			return ;
		}
		$data = unserialize(file_get_contents($filename));
		foreach ($data as $user)
		{
			if ($user['login'] === $_POST['login'])
			{
				if ($user['passwd'] === hash($_POST['oldpw'])) // add hashing algo ....
				{
					$user['passwd'] = hash($_POST["newpw"]); // add hashing algo ....
					$checker = 1;
				}
				else
				{
					echo("ERROR\n");
					return ;
				}
			}
		}
		if ($checker === 0)
		{
			echo("ERROR\n");
			return ;
		}
		file_put_contents($filename, serialize($data));
		echo("OK\n");
	}
	else
	{
		echo("ERROR\n");
		return ;
	}


?>