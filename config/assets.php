<?php
// Route all requests for ckeditor or ckplugins files to the
// appropriate location

$config['ck(editor|plugins)/.+\.(js|css|html|png|gif|xml)'] = array
(
	'route'       => 'vendor/$0',
	'cache'       => IN_PRODUCTION ? 'static' : FALSE,
	'expiry_time' => 3600
);


