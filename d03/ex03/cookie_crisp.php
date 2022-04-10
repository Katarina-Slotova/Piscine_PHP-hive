#!/opt/homebrew/bin/php
<?php

	if ($_GET[action] == "set")
	{
		setcookie($_GET[name], $_GET[value], time()); //what about expiry time?
	}
	if ($_GET[action] == "get")
	{
		echo($_COOKIE[$_GET[name]."\n"]); //$_COOKIE?
	}
	if ($_GET[action] == "del")
	{
		setcookie($_GET[name], NULL, time() - 100);
	}

?>