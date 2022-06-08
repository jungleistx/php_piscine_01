#!/usr/bin/php
<?php
foreach($argv as $tmp)
{
	if ($tmp === $argv[0])
		continue;
	print("$tmp\n");
}
?>