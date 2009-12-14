//= requires "editor"

/*
 * Includes the Aspell plugin (kindly ported from FCKeditor by Christian
 * Boisjoli) which provides spell checking without relying on any
 * browser plugins or third-party web services.
 * 
 * Note: you must add this to the toolbar as 'SpellCheck' rather than
 * the usual 'SpellChecker' in order to use it.
 * 
 * The plugin can be configured in config/ckeditor.php:
 *   aspell.language sets which dictionary to use - by default it uses
 *     Kohana's locale configuration
 *   aspell.program sets the path to the Aspell executable with sensible
 *     defaults for both Windows and Linux
 * 
 * Details on where to obtain the original plugin code are in:
 *   vendor/ckplugins/aspell/aspell.txt
 */


CKEDITOR.plugins.addExternal('aspell', "<?php echo url::site('assets/ckplugins/aspell');?>/");
CKEDITOR.config.extraPlugins = 'aspell';
