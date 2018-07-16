<?php

	/*$find = array('is','string','example');
	$replace = array('IS','STRING','EXAMPLE');
	$string = 'this is a string. this is an example';
	$new_string = str_replace($find,$replace,$string);
	echo $new_string;*/


	$find = array('hi','hello','hey there');
	$replace = array('h*','he&&o','he$#@#$#');
	if (isset($_POST['user_input']) && !empty($_POST['user_input']))
	{
		 $user_input = $_POST['user_input'];
		// $user_input_lc = strtolower($user_input);
		echo $user_input_new = str_ireplace($find, $replace, $user_input);
	}
?>
<hr>
<form action="advfunc.php" method="post">
	<textarea name="user_input" rows="6" cols="30"></textarea>
	<input type="submit" value="Submit">
</form>