//= requires "editor"

/*
 * This file sets CKEditor's interface language (instead of allowing
 * CKEditor to set it based on Request headers) based on the config
 * setting ckeditor.lang. By default, ckeditor.lang is set based on
 * Kohana's locale configuration.
 * 
 * This file also includes the relevent language file as part of the
 * main CKEditor JavaScript, which saves fetching it in a separate
 * request later.
 */

CKEDITOR.config.language = '<?php echo Kohana::config("ckeditor.lang");?>';

//= requires "../../vendor/ckeditor/lang/<?php echo Kohana::config('ckeditor.lang');?>"
