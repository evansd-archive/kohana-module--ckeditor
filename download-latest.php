<?php
if (DIRECTORY_SEPARATOR !== '/')
{
	echo "WARNING: This script won't work on Windows.\n";
	echo "You'll have to manually extract the latest version of CKEditor ";
	echo "into vendor/ckeditor and then run strip-byte-order-marks.php\n";
	exit(1);
}


$ckeditor_url = 'http://ckeditor.com/download';

$output_dir = dirname(__FILE__).'/vendor/ckeditor';

// Get the CKEditor download page
$html = file_get_contents($ckeditor_url);

// Extract all the download links
$found = preg_match_all('# href="(http://[^"]+/ckeditor_([0-9\.]+)\.tar.gz)"#', $html, $matches, PREG_SET_ORDER);
if ( ! $found)
{
	die('Sorry, no CKEditor download links could be found on '.$ckeditor_url);
}

// Sort by version
usort($matches, create_function('$a, $b', 'return version_compare($b[2], $a[2]);'));

// Get the latest
list($_, $url, $version) = reset($matches);

echo "Downloading CKEditor version $version from $url\n";

$success = FALSE;

// Create temporary directory
$tmpdir = exec('mktemp -d', $output, $status);

if($status == 0)
{
	// Download the file
	$download = $tmpdir.'/latest.tar.gz';
	passthru('wget '.escapeshellarg($url).' -O '.escapeshellarg($download), $status);

	if($status == 0)
	{
		// Untar files into temporary directory
		passthru('tar -xzvf '.escapeshellarg($download).' -C '.escapeshellarg($tmpdir), $status);
		
		if($status == 0)
		{
			// Move old editor files to backup location
			$backup = $output_dir.'~old';
			passthru('mv '.escapeshellarg($output_dir).' '.escapeshellarg($backup), $status);
			
			// Move new files in
			if($status == 0)
			{
				passthru('mv '.escapeshellarg($tmpdir.'/ckeditor').' '.escapeshellarg($output_dir), $status);
				if($status == 0)
				{
					// If successful, remove the backup
					passthru('rm -rf '.escapeshellarg($backup), $status);
					$success = TRUE;
				}
				else
				{
					// If unsuccessful, restore the backup
					passthru('mv '.escapeshellarg($backup).' '.escapeshellarg($output_dir), $status);
				}
			}
		}
		
	}
	
	// Remove the temporary directory
	passthru('rm -rf '.escapeshellarg($tmpdir), $status);
}
else
{
	echo join("\n", $output);
}

if($success)
{
	include("strip-byte-order-marks.php");
	exit(0);
}
else
{
	exit(1);
}
