<?php

/**
 * highlow
 *
 * A simple game that guesses numbers and is able to take user input.
 *
 * The game will ask the player for there name.
 *
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */



$isGameRunning = True;
$numberOfGuesses = 0;


fwrite(STDOUT, "**********************\n");
fwrite(STDOUT, "** Welcome to Hi-lo **\n");
fwrite(STDOUT, "**********************\n");

fwrite(STDOUT, "Try and guess the number that I am thinking of... \n-->");

$theNumberToGuess = mt_rand(1,100);


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