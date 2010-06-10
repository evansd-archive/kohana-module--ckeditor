<?php

// Kohana 2 only: see init.php for Kohana 3 routing

// Route all requests for ckeditor or ckplugins files to the
// appropriate location
$config['ck(editor|plugins)/.+\.(js|css|html|png|gif|xml)'] = array
(
	'route'       => 'vendor/$0',
	'expiry_time' => 3600
);
