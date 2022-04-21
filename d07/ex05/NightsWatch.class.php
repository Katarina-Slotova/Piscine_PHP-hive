<?php

	class NightsWatch
	{
		public $wallWatchers = array();

		public function recruit($addWatcher)
		{
			if (is_subclass_of($addWatcher, "IFighter"))
				$this->wallWatchers[] = $addWatcher;
		}

		public function fight()
		{
			foreach ($this->wallWatchers as $watcher)
				$watcher->fight();
		}
	}

?>