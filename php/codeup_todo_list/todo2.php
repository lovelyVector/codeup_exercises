<?php

$toDoItems = array();


function listItems($anArrayWePutIn){
    $tempString = "";

    foreach($anArrayWePutIn as $key => $value){
        $key = $key + 1;

        $tempString = $tempString . "[{$key}] {$value}".PHP_EOL;
    }
    return $tempString;
}



listItems($items);




function getInput($upper = false){
    $input = trim(fgets(STDIN));

	if ($upper == TRUE) {
		$input = strtoupper($input);
	}

    Return $input;

}










do{
    echo listItems($items);

    echo '(N)ew item, (R)emove item, (Q)uit : ';
    $input = getInput(true);





    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    }


}while($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";


// Exit with 0 errors
exit(0);