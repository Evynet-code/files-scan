$directories = array(
            'files_php/',
			'files_css/',
			'files_js/');

foreach ($directories as $directory)
{
	foreach(glob($directory . "*.php") as $files)
	{
		include $files;
	}
}
