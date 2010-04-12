<?php defined('SYSPATH') or die('No direct script access.');

// Send requests intended for the spellchecker script through to the proxy
// controller
// (Only used by Kohana 3: see config/routes.php for Kohana 2 routing)
Route::set('ckeditor_aspell', 'assets/ckplugins/aspell/spellerpages/server-scripts/spellchecker.php')
	->defaults(array(
		'controller' => 'ckeditoraspellplugin',
		'action'     => 'index'
	));
