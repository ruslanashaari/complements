<?php

function toRna($nucleotides) {
	
	$dnaToRna = [
		"G" => "C",
		"C" => "G",
		"T" => "A",
		"A" => "U"
	];

	return strtr(strtoupper($nucleotides), $dnaToRna);
  //php strtr will replace the first parameter with its complement value in second parameter
}
