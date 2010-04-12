<?php defined('SYSPATH') or die('No direct script access.');

// Send requests intended for the spellchecker script through to the proxy
// controller
// (Only used by Kohana 2: see init.php for Kohana 3 routing)
$config['assets/ckplugins/aspell/spellerpages/server-scripts/spellchecker.php']
	= 'ckeditor_aspell_plugin/index'; 


