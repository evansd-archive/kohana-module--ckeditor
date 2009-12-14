<?php
/*
 * Simple wrapper around the aspell plugin script so it becomes callable
 * via Kohana.
 * 
 * Needs an entry in the routes config mapping:
 *  assets/ckplugins/aspell/spellerpages/server-scripts/spellchecker.php
 * to:
 *  ckeditor_aspell_plugin/index
 */

class CKeditor_Aspell_Plugin_Controller extends Controller
{
	public function index()
	{
		// We need to explicitly declare these global because the
		// spellchecker script expects to be run as a standalone script,
		// rather than being included, and so it assumes that all its
		// variables are already in the global context
		global $aspell_prog;
		global $aspell_opts;
		global $tempfiledir;
		global $textinputs;
		global $input_separator;
		
		$lang = escapeshellarg(Kohana::config('ckeditor.aspell.lang'));
		$aspell_prog = Kohana::config('ckeditor.aspell.program');
		
		include Kohana::find_file
		(
			'vendor',
			'ckplugins/aspell/spellerpages/server-scripts/spellchecker',
			TRUE,
			'php'
		);
	}
}
