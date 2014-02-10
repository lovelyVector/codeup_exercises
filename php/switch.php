<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');


// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
        // Output Monday
        echo "Monday\n";
        break;
    case 2: 
        // Output Tuesday
        echo "Tuesday\n";
        break;
    case 3:
    	echo "Wendsday\n";
    	break;

    case 4:
    	echo "Thursday\n";
    	break;

    case 5:
    	echo "Friday\n";
    	break;
    case 6:
    	echo "Saterday\n";
    	break;
    case 7:
    	echo "Sunday\n";
    	break;
}

?>