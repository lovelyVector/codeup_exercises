<?php


$programIsRunning = true;


function get_input($upper = FALSE) 
{
	$input = trim(fgets(STDIN));

	if ($upper == TRUE) {
		$input = strtoupper($input);
	}
	
    Return $input;
}






fwrite(STDOUT, "\n\n\n****************\n");
fwrite(STDOUT, "Welcome to spoon\n");
fwrite(STDOUT, "****************\n\n\n");





do{
	fwrite(STDOUT, "*******\n");
	echo '(N)ew item, (R)emove item, (Q)uit : ';
	fwrite(STDOUT, "*******\n==>");
	$command = get_input();
}
while ($programIsRunning);
	

exit(0);

?>