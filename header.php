
<?php
//$script_name = $_SERVER['SCRIPT_NAME'];
/*$redirect_page = 'https://www.google.com';
$redirect = false;
if($redirect==true)
	{
		header('Location:'.$redirect_page);
	}
else
	{
		echo 'cannot redirect';
	}	

	ob_flush();*/





	require 'grabIPadd.php';
	foreach($ip_blocked as $ip)
	{
		if($ip==$ip_address)
		{
			die('your IP address '.$ip_address.'has been blocked');
		}	
	}
?>

<h1>My Page</h1>
This is my page.


<!<form action="" method="POST">
	<!<input type="submit" name="submit" value="Submit">
<!</form>	