<?php

	/*1st check : does it exist ? has it been submitted?
	2nd check : is it empty? or does value == is_null
	3rd check : display back to user*/


	if(isset($_GET['day']) &&isset($_GET['date']) &&isset($_GET['year']) )
	{
		$day = htmlentities($_GET['day']);
		$date = htmlentities($_GET['date']);
		$year = htmlentities($_GET['year']);

		if(!empty($day) &&!empty($date) &&!empty($year))
		{
			echo 'It is '.$day.' ' .$date. ' '.$year;
		}
		else
		{
			echo 'fill in all fields';
		}
	}


?>


<form action="getvariables.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br>
	<input type="submit" value="Submit">
</form>	