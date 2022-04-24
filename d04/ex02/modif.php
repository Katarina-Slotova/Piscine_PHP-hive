<?php

	if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] == "OK")
	{
		$data = unserialize(file_get_contents("../private/passwd"));
		$checker = 0;
		foreach ($data as $key => $user)
		{
			if ($user["login"] === $_POST["login"] && $user["passwd"] === hash("whirlpool", $_POST["oldpw"]))
			{
				$checker = 1;
				$data[$key]["passwd"] = hash("whirlpool", $_POST["newpw"]);
			}
		}
		if ($checker)
		{
			file_put_contents("../private/passwd", serialize($data));
			echo "OK\n";
		}
		else
			echo "ERROR\n";;
	}
	else
		echo "ERROR\n";

?>
