<?php

	class NightsWatch
	{
		public $wallWatchers = array();

		public function recruit($addWatcher)
		{
			if ($addWatcher instanceof IFighter)
				$this->wallWatchers[] = $addWatcher;
		}

		public function fight()
		{
			foreach ($this->wallWatchers as $watcher)
				$watcher->fight();
		}
	}

?>