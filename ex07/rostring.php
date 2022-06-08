#!/usr/bin/php
<?php
if ($argc < 2)
	exit;

$str = $argv[1];
$arr = array();

if (preg_match('| |', $str))
{
	$arr_tmp = explode(" ", $str);

	foreach($arr_tmp as $tmp)
	{
		if (strlen($tmp) == 0)
			continue;
		$str = trim($tmp);
		array_push($arr, $str);
	}
	$str = array_shift($arr);
	array_push($arr, $str);
	$str = implode($arr, ' ');
	print ($str . "\n");
}
else
{
	print($str . "\n");
}
?>