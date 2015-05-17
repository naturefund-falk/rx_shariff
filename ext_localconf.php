<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['shariff'] = 'EXT:rx_shariff/Resources/Private/Eid/Shariff.php';

if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['rx_shariff'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['rx_shariff'] = [
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\StringFrontend',
		'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\SimpleFileBackend',
		'options' => array(
			'defaultLifetime' => 60,
		),
		'groups' => ['pages', 'all']
	];
}
