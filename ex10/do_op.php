#!/usr/bin/php
<?php
	if ($argc != 4)
	{
		print("Incorrect Parameters\n");
		exit;
	}

	$num1 = trim($argv[1]);
	$oper = trim($argv[2]);
	$num2 = trim($argv[3]);

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