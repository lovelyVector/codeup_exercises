<?php
/**
 * fizzbuzz
 *
 * The fizzbuzz program should print out numbers 1 - 100.
 * If the number is a multiple of three it should print the word "Fizz".
 * If the number is a multiple of five it should print the word "Buzz".
 * If the number is a multiple of both 3 and 5 it should print the word, "FizzBuzz".
 * 
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 */

//	The minumum and maximum numbers that the fizzbuzz program will check.
$minNumber = 1;
$maxNumber = 100;

// This for loop will print out the numbers 1-100.
// The test condition is "<=" because we want it to include the number 100
for ($i=$minNumber; $i <= $maxNumber; $i++) { 


	if ($i%3 == 0 && $i%5 ==0) 
	{
		echo "FizzBuzz\n";
	}
	elseif ($i%3 == 0) 
	{
		echo "Fizz\n";
	}
	elseif ($i%5 == 0) {
		echo "Buzz\n";
	}
	else
	{
		echo "$i\n";
	}
	
}
?>