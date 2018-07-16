<?php

$filename = 'filetodelete1.txt';
if(@unlink($filename))
{
	echo 'File <strong>'.$filename.'</strong>has been deleted!';
}
else
{
	echo 'file not deleted';
}


//to rename the file
$fname = 'filetorename.txt';
$rand = rand(10000,99999);
if(rename($fname, $rand.'.txt'))
{
	echo 'File <strong>'.$fname. '</strong> has been renamed to <strong>'.$rand.'.txt</strong>';
}
else
{
	echo 'error renaming';
}
?>