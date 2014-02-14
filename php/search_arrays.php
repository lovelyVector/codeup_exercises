<?php
/**
 * Created by PhpStorm.
 * User: lovelyVector
 * Date: 2/13/14
 * Time: 11:16 AM
 */


//function isInArray($needle,$haystack){
//
//    if(array_search($needle,$haystack) == false){
//
//        return false;
//    }
//    else{
//        return true;
//    }
//}


function isInArray($needle,$haystack){

    $result = array_search($needle,$haystack);

    if(is_int($result) == true){
        return true;
    }
    else{
        return false;
    }
}

function numberOfMatches($arrayOne,$arrayTwo){
    $numberOfMatches = 0;

    foreach($arrayOne as $test){

        if(isInArray($test,$arrayTwo)){

            $numberOfMatches++;

        }
    }
    return $numberOfMatches;
}


$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

echo numberOfMatches($names,$compare);

echo var_dump(isInArray($compare,$names));

if(true == 1 ){
    print "fuck!!!";
}