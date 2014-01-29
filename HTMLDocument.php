<?php

class HTMLDocument extends DOMDocument {

	function __construct($version, $encoding) {
		parent::__construct($version, $encoding);
		$this->createElement($name);
	}

	function createTag($name, $value, array $attributes, $id, array $classes, array $styles) {
		$tag = $this->createElement($name, $value);
		foreach ($attibutes as $name => $value)
			$tag->setAttribute($name, $value);
		$tag->setAttribute('id', $id);
		$tag->setAttribute('class', implode(' ', $classes));
		$tag->setAttribute('style', implode_associative('', $styles, '%s: %s;'));
	}
}

function implode_format($glue, $pieces, $format = '(%s => %s)') {
	$array = array();
	foreach ($pieces as $key => $value) {
		$array[] = sprintf($format, $key, $value);
	}
	return implode($glue, $array);
}

/* function implode_associative($glue, $inside_glue, $pieces) {
	$array = array();
	foreach ($pieces as $key => $value) {
		$array[] = $key . $inside_glue . $pieces;
	}
	return implode($glue, $array);
} */



?>