<?php
	$names_array = array('Alex','Billy','Dale');
	$string = implode(', ', $names_array);

	echo $string.'<br>';


	$directory = 'C:\xampp\htdocs\database';
	if($handle = opendir($directory.'/'))
	{
		echo 'looking inside '.$directory.'<br>';
		while($file = readdir($handle))
		{	
			if($file!='.' && $file!='..')
			{
			echo '<a href="'.$directory.'">' .$file.'</a><br>';
			}
		}
	}

	$filename_or = 'image.jpg';
	$filename = rand(1000,9999).md5($filename_or).rand(1000,9999);
	echo $filename;


	//file exists function

	$filename = 'search1.txt';
	if(file_exists($filename))
	{
		echo 'File already exists.';
	}
	else
	{
		$handle = fopen($filename, 'w');
		fwrite($handle, 'AISHU');
		fclose($handle);
	}
?>