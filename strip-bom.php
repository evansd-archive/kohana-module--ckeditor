<?php
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