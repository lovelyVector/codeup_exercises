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
 * @copyright lovelyVector 2014
 */


fwrite(STDOUT, "**********************\n");
fwrite(STDOUT, "** Welcome to Hi-lo **\n");
fwrite(STDOUT, "**********************\n");



fwrite(STDOUT, 'What is your first name? ');


$first_name = fgets(STDIN);

fwrite(STDOUT, "Hello $first_name");

?>