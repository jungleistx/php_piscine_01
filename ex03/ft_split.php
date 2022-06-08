#!/usr/bin/php

<?php

function ft_split($str)
{
	$arr_tmp = explode(" ", $str);
	rsort($arr_tmp);

	$arr_ret = array();
	foreach($arr_tmp as $tmp)
	{
		if (strlen($tmp) == 0)
			continue;
		array_unshift($arr_ret, $tmp);
	}
	return $arr_ret;
}

?>
