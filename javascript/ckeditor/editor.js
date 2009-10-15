// -------------------------------
// Main editor code
// -------------------------------

var CKEDITOR_BASEPATH = "<?php echo url::site('assets/ckeditor');?>/";

// Include the main ckeditor file (we need to strip the extension, hence
// the substr hack)

//= requires "<?php echo substr(Kohana::find_file('vendor', 'ckeditor/ckeditor', TRUE, 'js'), 0, -3);?>"


// -------------------------------
// Default Config
// -------------------------------

// Spell check plugin
CKEDITOR.plugins.addExternal('aspell', "<?php echo url::site('assets/ckplugins/aspell');?>/");
CKEDITOR.config.extraPlugins = 'aspell';

// Target URL for image uploader plugin
CKEDITOR.config.filebrowserImageUploadUrl = "<?php echo url::site('admin/images/upload/original');?>";

// Editor css
CKEDITOR.config.contentsCss = "<?php echo url::site('assets/css/ckeditor/default.css');?>";

// Misc config settings
CKEDITOR.replaceByClassEnabled = false;
CKEDITOR.config.format_tags = 'p';
CKEDITOR.config.forcePasteAsPlainText = true;

// Toolbars
CKEDITOR.config.toolbar_Basic =
[
	['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','About']
];

CKEDITOR.config.toolbar_Full =
[
	['Source'],
	['Cut','Copy','Paste','PasteText','PasteFromWord'],
	['SpellCheck'], // Note 'SpellCheck' instead of 'SpellChecker' to use aspell plugin
	['RemoveFormat'],
	['Bold','Italic','Strike'],
	['NumberedList','BulletedList'],
	['Link','Unlink','Anchor'],	
	['Image','Table','SpecialChar'],
	['Styles'],
	['Maximize', 'ShowBlocks']
];

CKEDITOR.config.toolbar = 'Full';


CKEDITOR.addStylesSet( 'default',
[
	// Block Styles

	{ name : 'Paragraph'		, element : 'p' },
	{ name : 'Heading 1'		, element : 'h1' },
	{ name : 'Heading 2'		, element : 'h2' },
	
]);

// -------------------------------
// Site-Specific Config File
// -------------------------------

//= requires <ckeditor/config>

