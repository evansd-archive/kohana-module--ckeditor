<?php
// CKEditor interface language (by default we use Kohana's locale config)
$config['lang'] = str_replace('_', '-', strtolower(reset(Kohana::config('locale.language'))));

// Settings for the Aspell plugin
$config['aspell'] = array
(
	// Spellchecker dictionary language (by default, we use the
	// dictionary specified in Kohana's locale config)
	'lang' => reset(Kohana::config('locale.language')),
	
	// Default locations for Aspell program, based on platform
	'program' => KOHANA_IS_WIN ? '"C:\Program Files\Aspell\bin\aspell.exe"' : 'aspell'
);
