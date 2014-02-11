<?php
/**
 * Spooon.php
 *
 * This is a file to hold things.
 *
 * @package MyProject
 * @subpackage Common
 * @license http://opensource.org/licenses/MIT The MIT License
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 */







/**
 * This function adds two numbers together.
 * 
 * @param float $a The first number
 * @param float $b The second number
 */
function add($a = null, $b = null) {

	if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
		# code...
	}
	else{
		echo $a + $b;
	}
    
}

add(1,1);
echo "\n";
add(0.5,1);
echo "\n";
add(1);
echo "\n";









/**
 * This function subtracts two numbers.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function subtract($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
		# code...
	}
	else{
		echo $a - $b;
	}
}

subtract(1,1);
echo "\n";
subtract(0.5,1);
echo "\n";
subtract(1);
echo "\n";



/**
 * This function multiplies two numbers.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function multiply($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
		# code...
	}
	else{
		echo $a * $b;
	}
}





/**
 * This function divides two numbers.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function divide($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
		# code...
	}
	else{
		if ($b = 0) {
			echo "You are deviding by zero";
		}
		else{
			echo $a / $b;
		}
		
	}
}





/**
 * This function take the modulus of two numbers.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function modulus($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
		# code...
	}
	else{
		echo $a % $b;
	}
}

?>