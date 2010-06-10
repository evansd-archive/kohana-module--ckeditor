<?php defined('SYSPATH') or die('No direct script access.');

// Kohana 3 only: see config/routes.php and config/assets.php for
// Kohana 2 routing

// Send requests intended for the spellchecker script through to the proxy
// controller
Route::set('ckeditor_aspell', 'assets/ckplugins/aspell/spellerpages/server-scripts/spellchecker.php')
	->defaults(array(
		'controller' => 'ckeditoraspellplugin',
		'action'     => 'index'
	));

// Route all requests for ckeditor or ckplugins files to the
// appropriate static files
Route::set('ckeditor_assets', 'assets/<path>', array('path' => 'ck(editor|plugins)/.+\.(js|css|html|png|gif|xml)'))
	->defaults(array(
		'directory'  => 'assets',
		'controller' => 'static',
		'file'       => 'vendor/<path>',
		'config'     => array('expiry_time' => 3600)
	));

