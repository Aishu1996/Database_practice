<?php
	/*W riting
	R reading
	A ppending
	*/
	// firstly create the handle
	/*if(isset($_POST['name']))
	{
		 $name = $_POST['name'];
		if(!empty($name))
		{

			$handle = fopen('search.txt','a');	//2 arguments...1st arg = file name, 2nd arg = w,a,r
			fwrite($handle, $name."\n");
			fclose($handle);

			echo 'current names in file: ';

			$readin = file('search.txt');
			foreach ($readin as $fname)
			{
				echo $fname.',';	//comma separated value
			}
			
		}
		else
		{
			echo 'please type a name';
		}
	}



?>

<form action="file_handling.php" method="POST">
	Add names here:<br><input type="text" name="name"><br>
	<input type="submit" value="Submit">
</form>	*/

//the explode function in php
$filename = 'search.txt';
$handle = fopen($filename,'r');
$datain = fread($handle, filesize($filename));
$names_array = explode(',' , $datain);

echo $names_array[0];
/*foreach ($names_array as $name)
{
	echo $name.'<br>';
}*/
?>
