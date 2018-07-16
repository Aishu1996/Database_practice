<?php
require 'connect.php';
//to get data from database
$query="SELECT * FROM `user_info`";
//to read the data from query
if($is_query_run=mysql_query($query))
{
	echo "query executed".'<br>';
	while($query_execute=mysql_fetch_assoc($is_query_run))
	{
		echo '<table border="1" style="width:300px"><tr><td>'.$query_execute['Name'].'</td><td>'.$query_execute['Surname'].'</td></tr></table>';
		//echo $query_execute['Name'].'<br>';
	}
	
}
else
{
	echo "query not executed".'<br>';
}
?>