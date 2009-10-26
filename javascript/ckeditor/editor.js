var CKEDITOR_BASEPATH = "<?php echo url::site('assets/ckeditor');?>/";

// Include the main ckeditor file (we need to strip the extension, hence
// the substr hack)

//= requires "<?php echo substr(Kohana::find_file('vendor', 'ckeditor/ckeditor', TRUE, 'js'), 0, -3);?>"

