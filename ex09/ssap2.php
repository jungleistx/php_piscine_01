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

$final_arr = array();
$num_arr = array();
$char_arr = array();
$else_arr = array();

foreach($arr as $tmp)
{
	$char = $tmp[0];

	if (ctype_alpha($char))
		array_push($char_arr, $tmp);
	else if (ctype_digit($char))
		array_push($num_arr, $tmp);
	else
		array_push($else_arr, $tmp);
}

if (!empty($char_arr))
{
	sort($char_arr);
	natcasesort($char_arr);

	foreach($char_arr as $tmp)
	{
		array_push($final_arr, $tmp);
	}
}


if (!empty($num_arr))
{
	$num = count($num_arr);
	$x = 0;
	while ($x < $num - 1)
	{
		$y = 0;
		while ($y < $num - 1)
		{
			if (strcmp($num_arr[$y], $num_arr[$y + 1]) > 0)
			{
				$tmp = $num_arr[$y + 1];
				$num_arr[$y + 1] = $num_arr[$y];
				$num_arr[$y] = $tmp;
			}
			$y++;
		}
		$x++;
	}

	foreach($num_arr as $tmp)
	{
		array_push($final_arr, $tmp);
	}
}

if (!empty($else_arr))
{
	print_r($else_arr);
	sort($else_arr);

	foreach($else_arr as $tmp)
	{
		array_push($final_arr, $tmp);
	}
}

print_r($final_arr);

?>