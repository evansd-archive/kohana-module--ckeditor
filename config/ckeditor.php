<?php defined('SYSPATH') or die('No direct script access.');

// Used by both Kohana 2 and Kohana 3 
// ($config var for Kohana 2 and return statement for Kohana 3)

// Get current locale language
list($lang) = explode('.', setlocale(LC_CTYPE, 0), 2);

// Normalize the language
$lang = strtolower(str_replace(array(' ', '_'), '-', $lang));

// CKEditor interface language
$config['lang'] = str_replace('en-us', 'en', $lang);

// Settings for the Aspell plugin
$config['aspell'] = array
(
	// Spellchecker dictionary language
	'lang' => $lang,
	
	// Default locations for Aspell program, based on platform
	'program' => (defined('KOHANA_IS_WIN') ? KOHANA_IS_WIN : Kohana::$is_windows)
	             ? '"C:\Program Files\Aspell\bin\aspell.exe"'
	             : 'aspell'
);

return $config;
