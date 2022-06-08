#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$arr = $tab;
	$arr2 = $tab;
	rsort($arr2);
	sort($arr);

	return ($arr === $tab || $arr2 === $tab);
}
?>