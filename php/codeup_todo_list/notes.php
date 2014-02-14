<?php
/**
 * notes
 *
 * Created by PhpStorm.
 * User: lovelyVector
 * Date: 2/12/14
 * Time: 1:25 PM
 */
//
//require_once('vendor/autoload.php');
//
//$client = new Everyman\Neo4j\Client('krotus.sb01.stations.graphenedb.com', 24789);
//$client->getTransport()
//    ->setAuth('krotus', 'oBh7nnRM0Y8BzePSAaKt');
//
//print_r($client->getServerInfo());$items = [];
//
//$arthur = $client->makeNode();
//
//$arthur->setProperty('name', 'Arthur Dent')
//    ->setProperty('mood', 'nervous')
//    ->setProperty('home', 'small cottage')
//    ->save();
//
//
//



$items =[];


function listItems($itemsToList){

    $stringToReturn = "";    // Make an empty string

    foreach ($itemsToList as $item => $value) {
        $newIndex = $item + 1;
        $stringToReturn = $stringToReturn . "[{$newIndex}] {$value}\n";
    }

    Return $stringToReturn;

}





function getInput($upper = FALSE){
    $input = trim(fgets(STDIN));

    if($upper == true){
        return strtoupper($input);
    }
    else{
        return $input;
    }
}






function sortMenu(){
    return;
}



function exitProgram(){
    echo "Goodbye!\n";
    exit(0);
}




do{
    echo listItems($items);
    echo '(N)ew item, (R)emove item, (S)ort, (Q)uit : ';

    $input = getInput(true);



    // Check for actionable input
    if ($input == 'N') {

        fwrite(STDOUT,"Do you want the entry at the (b)eging or the (e)nd of the list?\n");

        $addEntryPosition = getInput(true);

        if($addEntryPosition == "B"){
            // Ask for entry
            fwrite(STDOUT,  'Enter item: ');
            // Add entry to list array
            array_unshift($items,getInput());
        }
        elseif($addEntryPosition == "E"){
            // Ask for entry
            fwrite(STDOUT,  'Enter item: ');
            array_push($items,getInput());
        }





    } elseif ($input == 'R') {
        // Remove which item?
        fwrite(STDOUT,'Enter item number to remove: ');
        // Get array key
        $key = getInput(false);
        // Remove from array
        unset($items[$key]);
    }


    elseif($input == 'S'){
        // Display seach options
        fwrite(STDOUT,"(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered");

        $sortTypeChoice = getInput(true);

        if($sortTypeChoice == "A"){
            sort($items);
        }
        elseif($sortTypeChoice == "Z"){
            rsort($items);
        }
        elseif($sortTypeChoice == "O"){
            asort($items);
        }
        else{
            arsort($items);
        }
    }

    elseif($input == 'F'){
        array_shift($items);
    }

    elseif($input == 'L'){
        array_pop($items);
    }

}
while($input != 'Q');


exitProgram();
