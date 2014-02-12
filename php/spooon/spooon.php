<?php

/**
* 
*/

$baseURL = "http://ws.spotify.com/search/1/";

if($seachType == 'album'){
	
}
elseif($seachType == 'artist') {

}
elseif($seachType == 'track'){
	# code...
}



echo $response = file_get_contents("http://ws.spotify.com/search/1/track?q=kaizers+orchestra");
