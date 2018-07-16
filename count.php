<?php
	function hit_count()
	{
		$filename = 'count.txt';
		$handle = fopen('count.txt','r');
		$current = fread($handle, filesize($filename));
		fclose($handle);
		//echo $current;

		//everytime this function is called we need to increment it..

		$current_inc = $current + 1;
		echo $current_inc;


		$handle = fopen($filename, 'w');
		fwrite($handle, $current_inc);
		fclose($handle);
	}
?>