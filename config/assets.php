<?php
// Route all requests for ckeditor or ckplugins files to the
// appropriate location

$config['ck(editor|plugins)/.+\.(js|css|html|png|gif|xml)'] = array
(
	'route'       => 'vendor/$0',
	'expiry_time' => 3600
);

// Required for Kohana 3 compatibility
return $config;
