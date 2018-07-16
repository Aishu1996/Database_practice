<?php

 
function hit_count()
{

	echo $ip_address = $_SERVER['REMOTE_ADDR'];
	$ip_file = file('ip.txt');
	foreach($ip_file as $ip)
	{
		$ip_single = trim($ip);
		if($ip_address!=$ip_single)
		{
			$found = true;
			break;
		}
		else
		{
			$found = false;
		}
	}
	if($found==false)
	{
		$filename = 'ip.txt';
		$handle = fopen($filename, 'r');
		$current = fread($handle, filesize($filename));
		fclose($handle);

		$current_inc = $current + 1;
	}
}

hit_count();

?>