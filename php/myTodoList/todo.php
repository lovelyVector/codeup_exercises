<?php
/**
 * todo.php
 *
 * This is my own personal php todo application. I am writing this because I need to learn php.
 * Although the application is simple it should be a good excercise in writing a command line tool.
 *
 * @package Todo
 * @subpackage Common
 * @license http://opensource.org/licenses/MIT The MIT License
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 */

// The first thing that needs to be made is a way to store the todos.
// In the most simple of cases this can be done with a simple array.
// Arrays can be made with the array() function or by using the syntactic sugar [].
$items = array();

// In the future I want to make a notes class.


// The class is asking that we make a function to list the items in the $items array.
funtion list_items($items){
	// Return the string of list items seperated by new line characters.
	// DONOT use echo use Return
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{
    // Return filtered STDIN input
}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

?>