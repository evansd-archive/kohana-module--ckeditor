<?php defined('SYSPATH') or die('No direct script access.');

// Kohana 2 only: see init.php for Kohana 3 routing

// Send requests intended for the spellchecker script through to the proxy
// controller
$config['assets/ckplugins/aspell/spellerpages/server-scripts/spellchecker.php']
	= 'ckeditor_aspell_plugin/index'; 


