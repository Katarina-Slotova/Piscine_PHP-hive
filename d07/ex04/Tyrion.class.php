<?php

	class Tyrion extends Lannister
	{
		public function sleepWith($person)
		{
			if (get_class($person) === "Sansa")
				printf("Let's do this." . PHP_EOL);
			else
				printf("Not even if I'm drunk !" . PHP_EOL);
		}

	}

?>