<?php

function ruleOne($char){
	if($char == "0"){
		return "1 11 0";

	}
	elseif($char == " "){
		return ' 1    011';
	}
	elseif ($char == "1") {
		return "1  011";
	}

	
}

$seed = "0111 0";

while(true){
	echo "$seed\n";
	$a = $seed;

	$b =1;
	$c =10;

	$d = rand($b,$c);

	for ($i = 0; $i<= strlen($a);++$i) {
		$seed = $seed . ruleOne($seed[$i]);
		if($i%$d <= 6){
			//echo "\n";
		}
		echo $seed;

		
	}
	

}

