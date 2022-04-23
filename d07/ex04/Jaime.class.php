<?php

	class Jaime extends Lannister
	{
		public function sleepWith($person)
		{
			if ($person instanceof Cersei)
				printf("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			else if ($person instanceof Tyrion)
				printf("Not even if I'm drunk !" . PHP_EOL);
			else
				printf("Let's do this." . PHP_EOL);
		}

	}

?>
