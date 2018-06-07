<?php

function url_for($script_path){
	// add the leading '/' if not paresent
	if($script_path[0] != '/'){
		$script_path = "/" . $script_path;
	}
	return WWW_ROOT . $script_path;
}

function h($string=""){
	return htmlspecialchars($string);
}

// PHP on Windows dose not have a money_format() function.
// This is a super-simple replacement.

if(!function_exists('money_format')){
	function money_format($format , $number){
		return '$' . number_format($number , 2);
	}
}

?>