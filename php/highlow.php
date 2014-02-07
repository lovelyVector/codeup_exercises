<?php

/**
 * highlow
 *
 * A simple game that guesses numbers and is able to take user input.
 *
 * The game will ask the player for there name.
 * Then the game will pick a random number.
 * The player will be prompted to guess the number.
 * If the user guesses incorrectly the programm will give the user a hint.
 *
 *
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */



$isGameRunning = True;
$numberOfGuesses = 0;


if($argc != 3){
	fwrite(STDOUT, "Please enter the correct number of arguments.\n");
	exit(0);
}

$minValue = $argv[1];
$maxValue = $argv[2];

if(!is_numeric($minValue)){
	fwrite(STDOUT, "Please enter a minimum value that is an integer.\n");
	exit(0);
}

if(!is_numeric($maxValue)){
	fwrite(STDOUT, "Please enter a maximum value that is an interger.\n");
	exit(0);
}

// This is a check to see if the minimum value is less than the maximum
if($minValue >= $maxValue){
	fwrite(STDOUT, "Please enter a minimum value that is less than the maximum value.\n");
	exit(0);

}


fwrite(STDOUT, "**********************\n");
fwrite(STDOUT, "** Welcome to Hi-lo **\n");
fwrite(STDOUT, "**********************\n");

fwrite(STDOUT, "Try and guess the number that I am thinking of... \n-->");



$theNumberToGuess = mt_rand($argv[1],$argv[2]);



while ($isGameRunning) {
	$valueOfGuess = fgets(STDOUT);
	++$numberOfGuesses;

	if ($valueOfGuess == $theNumberToGuess) {

		$isGameRunning = False;
		fwrite(STDOUT, "You won!\n");
		fwrite(STDOUT, "And you did it in $numberOfGuesses guesses\n");

		exit(0);
	}
	else{

		if($valueOfGuess <= $theNumberToGuess){
			fwrite(STDOUT, "Try again. You guessed to low.\n-->");
		}
		else{
			fwrite(STDOUT, "Try again. You guessed to high.\n-->");
		}
	}
}

?>