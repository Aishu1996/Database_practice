<?php
	
	$offset = 1;
	if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith']))
	{
		 $text = $_POST['text'];
		 $search = $_POST['searchfor'];
		 $replace = $_POST['replacewith'];
		 $search_length = strlen($search);

		if(!empty($text) &&!empty($search) &&!empty($replace))
		{
			while($strpos = strpos($text, $search, $offset))
			{
				//echo $strpos.'<br>';
				 echo $offset = $strpos + $search_length;
				echo  $text = substr_replace($text, $replace, $strpos, $search_length);
			}
		}
		else
		{
			echo 'please fill all fields';	
		}
	}

?>

<form action="find&replace_aapplication.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	Search For:<br>
	<input type= "text" name="searchfor"><br><br>
	Replace with:<br>
	<input type = "text" name="replacewith"><br><br>
	<input type="submit" value="Submit">

</form>	