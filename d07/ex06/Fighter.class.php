<?php

	abstract class Fighter
	{
		public $createdFighter;

		public function __construct($fighter)
		{
			$this->createdFighter = $fighter;
		}

		abstract public function fight($object);
	}

?>