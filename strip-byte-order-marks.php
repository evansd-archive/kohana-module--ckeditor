<?php
/*
 * Many of the CKEditor JavaScript files contain Byte-Order Marks
 * [http://en.wikipedia.org/wiki/Byte-order_mark] which cause problems
 * when these files are included in other files, as the BOMs no longer
 * come at the beginning of the document.
 * 
 * This extremely crude script just strips the BOMs from all files in
 * the vendor directory. It is run automatically by the
 * download-latest.php script, but you might need to run it if you've
 * downloaded any plugins, or downloaded CKEditor manually.
 */

$dirs = array(dirname(__FILE__).DIRECTORY_SEPARATOR.'vendor');

while($dir = array_shift($dirs))
{
	foreach(glob($dir.DIRECTORY_SEPARATOR.'*') as $entry)
	{
		if(is_dir($entry))
		{
			$dirs[] = $entry;
		}
		else
		{
			$contents = file_get_contents($entry);
			if($contents[0] == "\xEF" AND $contents[1] == "\xBB" AND $contents[2] == "\xBF")
			{
				echo $entry."\n";
				file_put_contents($entry, substr($contents, 3));
			}
		}
	}
}
