<?php
// Php low-(no)Database Libary
// No Real DB, just some Datamanagement in Files.

function phdb_convert_todb($STRING){
	$hexadecimal = '';
	for ($i = 0; $i < strlen($STRING); $i++) {
	$byte = strtoupper(dechex(ord($STRING{$i})));
	$byte = str_repeat('0', 2 - strlen($byte)).$byte;
	$hexadecimal.=$byte." ";
	}
	return $hexadecimal;
}
function phdb_convert_todb($HEX){
	$ascii='';
	$HEX=str_replace(" ", "", $HEX);
	for($i=0; $i<strlen($HEX); $i=$i+2) {
	$ascii.=chr(hexdec(substr($HEX, $i, 2)));
	}
	return($ascii);
}
function phdb_use($DB,$PATH){
	global $PHDB_DATABASE_PATH;
	if(!isset($PATH)){
		$PATH=".";
	}
	$i=0;
	while($PATH[$i]){
		$i++;
	}$i--;
	if($PATH[$i]!="/"){
		$PATH.="/";
	}
	if(!is_dir($PATH.$DB)){
		mkdir($PATH.$DB);
	}
	$PHDB_DATABASE_PATH=$PATH.$DB;
}
?>
