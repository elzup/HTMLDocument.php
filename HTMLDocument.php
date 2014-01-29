<?php

class HTMLDocument extends DOMDocument {

	function __construct($version, $encoding) {
		parent::__construct($version, $encoding);
		$this->createElement($name);
	}

	function createTag($name, $value = null, array $attributes = null, $id = null, array $classes = null, array $styles = null) {
		$tag = $this->createElement($name, $value);
		if (isset($attributes))
			foreach ($attibutes as $name => $val)
				$tag->setAttribute($name, $val);
		if (isset($id)) $tag->setAttribute('id', $id);
		if (isset($classes)) $tag->setAttribute('class', implode(' ', $classes));
		if (isset($styles)) $tag->setAttribute('style', implode_associative('', $styles, '%s: %s;'));
		return $tag;
	}

	function createTagA($name, $value = null, $href, array $attributes = null, $id = null, array $classes = null, array $styles = null) {
		$attributes['href'] = $href;
		return $this->createTag($name, $value, $attributes, $id, $classes, $styles);
	}
}

function implode_format($glue, $pieces, $format = '[%s] => %s') {
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