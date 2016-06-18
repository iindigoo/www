<?php
function random_char($string) {
	$i = mt_rand(0, strlen($string)-1);
	return $string[$i];
}
function random_string($lenght, $char_set){
	$output = '';
	for($i=0; $i < $length; $i++) {
		$output .= random_char($char_set);
	}
	return $output;
}
function generate_password($lenght){
$lower = 'abcdefghijklmnopqrstuvwxyz';
$upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '$*?!-@#%^';

$use_lower = true;
$use_upper = true;
$use_numbers = true;
$use_symbols = true;

$chars = '';
if($use_lower === true) { $chars .= $lower; }
if($use_upper === true) { $chars .= $upper; }
if($use_numbers === true) { $chars .= $numbers; }
if($use_symbols === true) { $chars .= $symbols; }

return random_string($lenght, $chars);
}

echo generate_password(8);