<?php
/**
 * My TODOAPP
 *
 * @package
 *
 */


$items = array();


function list_items($list)
{
    return serialize($list);
}

// Get STDIN, strip whitespace and newlines,
// and convert to uppercase if $upper is true
function get_input($upper = FALSE)
{
    $input = trim(fgets(STDIN));

    if($upper == true){
        return strtoupper($input);
    }
    else{
        return $input;
    }
}


function isValid($variableToCheck){
    if(isset($variableToCheck) && ($variableToCheck)){

    }
}

// The loop!
do {
    // Echo the list produced by the function
    echo unserialize(list_items($items));

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
















// * @author Alexander A Guerra <lovelyVector@gmail.com>
// * @version 0.0.1
// */
//
//// Create array to hold list of todo items
//$items = array();
//
//
//
//
//
//
//
//function list_items($list)
//{
//	// Make an empty string
//	$stringToReturn = "";
//
//	// Run a for loop for each item in the $items array
//	foreach ($list as $item => $value) {
//		$item = $item + 1;
//		$stringToReturn = $stringToReturn . "[{$item}] {$value}\n";
//	}
//
//    Return $stringToReturn;
//}
//
//function get_input($upper = FALSE)
//{
//	$input = trim(fgets(STDIN));
//
//	if ($upper == TRUE) {
//		$input = strtoupper($input);
//	}
//
//    Return $input;
//}
//
//
//
//
//
//
//
//
//
//
//
//
//// The loop!
//do {
//
//    echo list_items($items);
//
//
//
//    // Show the menu options
//    echo '(N)ew item, (R)emove item, (Q)uit : ';
//
//    // Get the input from user
//    $input = get_input(TRUE);
//
//
//
//    // Check for actionable input
//    if ($input == 'N') {
//        // Ask for entry
//        echo 'Enter item: ';
//        // Add entry to list array
//        $items[] = trim(fgets(STDIN));
//    } elseif ($input == 'R') {
//        // Remove which item?
//        echo 'Enter item number to remove: ';
//        // Get array key
//        $key = trim(fgets(STDIN));
//        // Remove from array
//        unset($items[$key]);
//    }
//// Exit when input is (Q)uit
//} while ($input != 'Q');
//
//// Say Goodbye!
//echo "Goodbye!\n";
//
//// Exit with 0 errors
//exit(0);