#!/usr/bin/php
<?php
while (1)
{
	print("Enter a number: ");

	$x = fscanf(STDIN, "%[^\n]%*c", $num);

	if (feof(STDIN))
	{
		print("^D\n");
		exit;
	}

	if ($x == 0)
	{
		$num = '';
	}

	if (!(is_numeric($num)))
	{
		print("'$num' is not a number\n");
		continue;
	}
	else
	{
		if ($num % 2 == 0)
			print("The number $num is even\n");
		else
			print("The number $num is odd\n");
	}
}
?>
