<?php
/**
 * foreach.php
 *
 * "This really makes a php developers life alot easier"
 * Used to iterate over arrays.
 * 
 * 
 * @author Alexander A Guerra <lovelyVector@gmail.com>
 * @version 0.0.1
 */

/**
 * @var array an array of fruits
 */
$fruits = array('apple','banana','orange','lime');

for ($i=0; $i < count($fruits); $i++) { 
	echo ("\$fruits has an element with a value of {$fruits{$i}}\n");
}

foreach ($fruits as $fruit) {
	echo "$fruit";
	echo "\n";
}

?>