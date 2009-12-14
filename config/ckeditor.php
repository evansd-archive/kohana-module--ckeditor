<?php
// By default, we use Kohana's locale config to determine CKeditor's
// language setting. We need to do some transformation, though, to get
// it in the right format, particularly as CKEditor uses some slightly
// non-standard locale names, which we have to convert.
// --------------------------------------------------------
$_lang = reset(Kohana::config('locale.language'));
$_lang = str_replace('_', '-', strtolower($_lang));
$_map = array
(
 	'en-gb' => 'en-uk'
); 
if (isset($_map[$_lang])) $_lang = $_map[$_lang];
// --------------------------------------------------------


// CKEditor interface language
$config['lang'] =  $_lang;

// Settings for the Aspell plugin
$config['aspell'] = array
(
	// Spellchecker dictionary language (by default, we use the
	// dictionary specified in Kohana's locale config)
	'lang' => reset(Kohana::config('locale.language')),
	
	// Default locations for Aspell program, based on platform
	'program' => KOHANA_IS_WIN ? '"C:\Program Files\Aspell\bin\aspell.exe"' : 'aspell'
);
