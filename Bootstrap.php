<?php

/**
 * module bootstrap
 */
class MarkdownBootstrap extends Knowledgeroot_Module_Bootstrap_Abstract {
    public function _initMarkdown() {
	$parser = new Markdown_Parser();

	Knowledgeroot_Registry::set('Knowledgeroot_Content_Parser', $parser);
    }
}
