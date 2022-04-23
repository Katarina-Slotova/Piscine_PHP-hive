#!/usr/bin/php
<?php

	function which_month($month)
	{
		$month = strtolower($month);
		$months = array("janvier"=>1, "fevrier"=>2, "mars"=>3,
		"avril"=>4, "mai"=>5, "juin"=>6, "juillet"=>7, "aout"=>8,
		"septembre"=>9, "octobre"=>10, "novembre"=>11, "decembre"=>12);
		return ($months[$month]);
	}

	date_default_timezone_set('Europe/Paris');
	if ($argc > 1)
	{
		$unwanted = array('é'=>'e', 'û'=>'u');
		$str = strtr($argv[1], $unwanted);
		$array = explode(" ", $str);
		$weekday = preg_match('/([lL]undi|[mM]ardi|[mM]ercredi|[jJ]eudi|[vV]endredi|[sS]amedi|[dD]imanche)/', $array[0]);
		if (!$weekday)
		{
			echo ("Wrong Format\n");
			exit();
		}
		$day = preg_match('/([1-9]|0[1-9]|1[1-9]|2[0-9]|3[0-1])/', $array[1]);
		if (!$day)
		{
			echo ("Wrong Format\n");
			exit();
		}
		$month = preg_match('/([jJ]anvier|[fF]evrier|[fF]évrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out|[aA]oût|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]ecembre|[dD]écembre)/', $array[2]);
		if (!$month)
		{
			echo ("Wrong Format\n");
			exit();
		}
		$year = preg_match('/([0-9]{4})/', $array[3]);
		if (!$year)
		{
			echo ("Wrong Format\n");
			exit();
		}
		$time = preg_match('/(([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9])/', $array[4]);
		if (!$time)
		{
			echo ("Wrong Format\n");
			exit();
		}
		$formatted_time = array();
		$formatted_time = explode(":", $array[4]);
		$final_month = which_month($array[2]);
		$final_day = $array[1];
		$final_year = $array[3];
		$ret = mktime($formatted_time[0], $formatted_time[1], $formatted_time[2], $final_month, $final_day, $final_year);
		echo($ret."\n");
	}

?>