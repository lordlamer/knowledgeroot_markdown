<?php

use \Michelf\Markdown;

class Markdown_Parser extends Knowledgeroot_Content_Parser_Abstract {
	public function parse($content) {
		// load Markdown
		require_once('Markdown.php');

		return Markdown::defaultTransform($content);
	}
}