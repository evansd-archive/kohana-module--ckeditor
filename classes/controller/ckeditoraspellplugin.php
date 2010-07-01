<?php
/*
 * Simple wrapper around the aspell plugin script so it becomes callable
 * via Kohana.
 */
class Controller_CKEditorAspellPlugin extends Controller
{
	public function action_index()
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
		
		ob_start();
		
		include Kohana::find_file
		(
			'vendor',
			'ckplugins/aspell/spellerpages/server-scripts/spellchecker',
			'php'
		);
		
		$this->request->response = ob_get_clean();
	}
}
