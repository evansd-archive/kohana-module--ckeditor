<?php defined('SYSPATH') or die('No direct script access.');

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

// Required for Kohana 3 compatibility
return $config;
