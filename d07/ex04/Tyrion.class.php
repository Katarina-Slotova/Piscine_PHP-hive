<?php

	class Tyrion extends Lannister
	{
		public function sleepWith($person)
		{
			if ($person instanceof Sansa)
				printf("Let's do this." . PHP_EOL);
			else
				printf("Not even if I'm drunk !" . PHP_EOL);
		}

	}

?>