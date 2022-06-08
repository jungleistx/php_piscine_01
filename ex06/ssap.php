#!/usr/bin/php
<?php
$arr = array();
$x = $argc;

while($x-- > 1)
{
	$str = $argv[$x];

	if (preg_match('| |', $str))
	{
		$arr_split = array();
		$arr_split = explode(" ", $str);
		rsort($arr_split);

		foreach($arr_split as $tmp)
		{
			if (strlen($tmp) == 0)
				continue;
			array_unshift($arr, $tmp);
		}
	}
	else if (strlen($str) > 0)
		array_unshift($arr, $str);
}

sort($arr);
foreach($arr as $final)
{
	print($final . "\n");
}
?>