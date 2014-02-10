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

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	

	// if (is_int($thing)) {
	// 	echo "Integer\n";
	// }
	// elseif (is_float($thing)) {
	// 	echo "Float\n";
	// }
	// elseif (is_bool($thing)) {
	// 	echo "Bool\n";
	// }
	// elseif (is_array($thing)) {
	// 	echo "Array\n";
	// }
	// elseif (is_null($thing)) {
	// 	echo "Null\n";
	// }
	// elseif (is_string($thing)) {
	// 	echo "String\n";
	// }
	// 
	// 
	// 
	// 
	// if (is_scalar($thing)) {
	// 	echo "$thing\n";

	// 	if (is_bool($thing)) {
	// 		echo var_dump($thing);
	// 	}
	// }

	if (is_array($thing)) {
		echo "Array\n";
	}
	else{
		echo "$thing \n";
	}


}
?>