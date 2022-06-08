#!/usr/bin/php
<?php
if ($argc != 2)
	exit;
$str = trim($argv[1]);
print(preg_replace('| +|', ' ', $str) . "\n");
?>