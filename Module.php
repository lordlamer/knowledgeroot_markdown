<?php

/**
 * markdown module initialisation
 */
class MarkdownModule implements Knowledgeroot_Module_Interface {
	/**
	 * return textile config path
	 */
	public function getConfigPath() {
		return __DIR__ . '/config/module.ini';
	}
}
