#!/usr/bin/php
<?php
	if ($argc != 2)
	{
		print("Incorrect Parameters\n");
		exit;
	}

	$num1 = intval($argv[1]);
	$len = strlen($num1);
	$oper = $argv[1][$len];
	$len += strlen($oper);
	$num2 = substr($argv[1], $len);
	$len += strlen($num2);

	if (strlen($argv[1] != $len))
	{
		print("Syntax Error\n");
		exit;
	}

	if ($oper == "+")
		printf("%d\n", $num1 + $num2);
	else if ($oper == "-")
		printf("%d\n", $num1 - $num2);
	else if ($oper == "*")
		printf("%d\n", $num1 * $num2);
	else if ($oper == "/")
		printf("%d\n", $num1 / $num2);
	else if ($oper == "%")
		printf("%d\n", $num1 % $num2);
?>