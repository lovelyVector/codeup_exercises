<?php
/**
 * for.php
 *
 * This is information about the for.php file.
 * The excersise first asks the user to be prompted for a starting and ending number.
 * 
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 */

// Prompt the user for a starting number and store the response in $minNumber.
fwrite(STDOUT, "Please enter a number.\n");
$minNumber = fgets(STDOUT);

// Prompt the user for an ending number and store the response in $maxNumber.
fwrite(STDOUT, "Please enter a number.\n");
$maxNumber = fgets(STDOUT);

// Now that I have two numbers what needs to be checked?
// I need to check that both numbers are not the same.
// What happens if the minimum number is greater than the maximum number?
// Should it give an error or count backwords?

// At this point I am generating an infinite loop...I think it's because I am using a string as my minNumber.
// I should probably cast it to an int.


// I am not usre if this is the right way for me to approch the whole problem.
// But I willl keep on moving on...That is the only way for me to go. Forward...
// 

for ($i=$minNumber; $i < $maxNumber; $i++)
{ 
	echo "{$i}\n";
}

?>