<?php

class HTMLDocument extends DOMDocument {

	/**
	 * Creates a new HTMLDocument object
	 * @param string version[optional]
	 * @param string encoding[optional]
	 */
	function __construct($version, $encoding) {
		parent::__construct($version, $encoding);
	}
}

?>