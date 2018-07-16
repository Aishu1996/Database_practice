<?php

$match = 'pass123';
if(isset($_POST['password']))
{
	$password = $_POST['password'];
	if(!empty($password))
	{
		echo 'ok';
	}
	else
	{
		echo 'please fill something. password can not remain blank.';
	}
		if($password==$match)
		{
			echo 'thats correct!';
		}
		else
		{
			echo 'thats incorrect';
		}
}

?>

<form action="postvariables.php" method="POST">
	Password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="submit">
</form>	