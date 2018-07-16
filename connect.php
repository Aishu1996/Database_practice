<?php
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='';

	//@mysql_connect($mysql_host,$mysql_user,$mysql_password) or die('Cannot connect to db');
	//@mysql_select_db('student');

	if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
	{
		die('cannot connect to db');		
	}
	else
	{	
		if(@mysql_select_db('student'))
		{
			echo 'connection successfull'.'<br>';
		}
		else
		{
			die('cannot connect to db').'<br>';
		}
	}
?>