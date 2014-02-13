<?php
/**
 * Created by PhpStorm.
 * User: lovelyVector
 * Date: 2/13/14
 * Time: 11:16 AM
 */


function isInArray($needle,$haystack){

    if(array_search($needle,$haystack) == false){

        return false;
    }
    else{
        return true;
    }
}

$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael']