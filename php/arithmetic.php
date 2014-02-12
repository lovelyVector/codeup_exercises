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






function validate($value='')
{
	# code...
}


/**
 * This function adds two numbers together. Both numbers must be numeric.
 * 
 * @param float $a The first number
 * @param float $b The second number
 */
function add($a = null, $b = null) {

	if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
	}
	else{
		return $a + $b;
	}
    
}



/**
 * This function subtracts two numbers. Both arguments must be numeric.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function subtract($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
	}
	else{
		return $a - $b;
	}
}



/**
 * This function multiplies two numbers. Both arguments should be numeric.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function multiply($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
	}
	else{
		echo $a * $b;
	}
}





/**
 * This function divides two numbers. Both arguments should be numeric.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function divide($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
	}
	else{
		if ($b = 0) {
			echo "You are deviding by zero";
		}
		else{
			return $a / $b;
		}
		
	}
}





/**
 * This function take the modulus of two numbers. Both numbers should be numeric.
 *
 * @param float $a The first number
 * @param float $b The second number
 */
function modulus($a = null, $b = null) {
    if ($a == null || $b == null) {
		echo "Warning: Missing argument 2";
	}
	else{
		return $a % $b;
	}
}

?>