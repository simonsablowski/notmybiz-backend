<?php

$configuration = array();

$configuration['pathApplication'] = dirname(__FILE__) . '/';

$configuration['baseUrl'] = '/notmybiz/backend/';
$configuration['cheeseUrl'] = '/cheese/';
$configuration['frontendUrl'] = '/notmybiz/frontend/';

$configuration['frontendName'] = 'notmybiz';

$configuration['includeDirectories'] = array(
	$configuration['pathApplication'],
	$configuration['pathApplication'] . '../../cheese/',
	$configuration['pathApplication'] . '../frontend/',
	$configuration['pathApplication'] . '../../nacho/'
);

$configuration['Database'] = array(
	'type' => 'MySql',
	'host' => 'localhost',
	'name' => 'notmybiz',
	'user' => 'root',
	'password' => ''
);

$configuration['Localization'] = array(
	'default' => 'en',
	'en' => array(
		'language' => 'en',
		'locale' => 'en_GB',
		'name' => 'English'
	)
);

$configuration['Request'] = array(
	'defaultQuery' => 'GalleryImage/index',
	'aliasQueries' => array()
);

$configuration['basicAuthentication'] = false;

$configuration['debugMode'] = false;