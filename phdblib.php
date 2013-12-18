<?php
// Php low-(no)Database Libary
// No Real DB, just some Datamanagement in Files.

//Convert a normal String to HEX-String
function phdb_convert_todb($STRING){
	$hexadecimal = '';
	for ($i = 0; $i < strlen($STRING); $i++) {
	$byte = strtoupper(dechex(ord($STRING{$i})));
	$byte = str_repeat('0', 2 - strlen($byte)).$byte;
	$hexadecimal.=$byte." ";
	}
	return $hexadecimal;
}
//Convert a HEX-String to normal String
function phdb_convert_todb($HEX){
	$ascii='';
	$HEX=str_replace(" ", "", $HEX);
	for($i=0; $i<strlen($HEX); $i=$i+2) {
	$ascii.=chr(hexdec(substr($HEX, $i, 2)));
	}
	return($ascii);
}

?>
