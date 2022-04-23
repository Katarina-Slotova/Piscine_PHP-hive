<?php

	if ($_GET["action"] == "set" && $_GET["name"] != "" && $_GET["value"] != "")
	{
		setcookie($_GET["name"], $_GET["value"], time() + (86400 * 30));
	}
	if ($_GET["action"] == "get" && $_GET["name"] != "" && !$_GET["value"])
	{
		print_r("Here");
		echo($_COOKIE[$_GET["name"]."\n"]);
	}
	if ($_GET["action"] == "del" && $_GET["name"] != "" && !$_GET["value"])
	{
		setcookie($_GET["name"], NULL, time() - (86400 * 30));
	}

?>