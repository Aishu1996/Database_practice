<?php
	//rand();
	//$rand = rand();
	//echo $rand.'/'.$max;

/*if(isset($_POST['roll']))
{
	$rand = rand(1,6);
	echo 'you rolled a '.$rand;
}

//to display current file name of the php
$script_name = $_SERVER['SCRIPT_NAME'];
echo $script_name;*/

include 'header.php';
	if(isset($_POST['submit']))
	{
		echo 'Process 1';
	}

?>

<!-<form action="random_num.php" method="POST">
	<!<input type="submit" name="roll" value="Roll a die">
<!</form>	