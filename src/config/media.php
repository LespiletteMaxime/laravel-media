<?php
return [
	'default_path' => '/upload',
	'folder_structure' => date('d-m-Y'),
	'default_validator' => 'image',
	'max_file_size' => ini_get('upload_max_filesize')
];
