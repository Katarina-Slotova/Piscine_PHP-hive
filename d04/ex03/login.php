<?php

	include "auth.php";

	session_start();

	$check_account = auth($_GET["login"], $_GET["passwd"]);
	if ($check_account)
	{
		$_SESSION["loggued_on_user"] = $_GET["login"];
		echo "OK\n";
	}
	else 
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR\n";
	}

?>
