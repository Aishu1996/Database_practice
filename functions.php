<?php
	function MyName()
	{
		echo 'alex<br>';
	}

	MyName();
	MyName();
	MyName();

	//passing arguments
	$num1 = 10;
	$num2 = 5;
	function add($num1,$num2)
	{
		echo $num1 + $num2;
	}
	add($num1,$num2);

	//to display number & string

	function displayDate($day,$date,$year)
	{
		echo $day.' '.$date.' '.$year.'<br>';
	}

	displayDate('Monday',31,2018);

	//(10,10)/(20,20)=2

	function add1($n1,$n2)
	{
		$result=$n1 + $n2;
		return $result;
	}
	//echo add1(15, 20);
	function divide($n1,$n2)
	{
		$result=$n1/$n2;
		return $result;
	}

	$sum = divide(add1(10,10), add1(20,20));
	echo $sum.'<br>';

	//global variables

	$user_ip = $_SERVER['REMOTE_ADDR'];

	function echo_ip()
	{
		//echo $user_ip;
		global $user_ip;
		$string = 'your IP address is:'.$user_ip.'<br>';
		echo $string;
	}

	echo_ip();

	$string = 'this example .';
	//($string,1)=respective key of each element
	//($string,2)=position of the word by counting alphabets
	//($string,1,'.') counts the fullstop after the space
	$string_word_count = str_word_count($string, 1, '.');
	print_r($string_word_count);


	$string = 'jpmc';
	$string_shuffled = str_shuffle($string);
	echo $string_shuffled;

	$half = substr($string_shuffled,0,strlen($string/2));
	echo $half.'<br>';

	$string1 = 'aishu';
	$string_reversed = strrev($string1);
	echo $string_reversed.'<br>';

	//plagiarism detection by means of percentage, similar_text function

	$string_one = 'Aishwarya';
	$string_two = 'This';

	similar_text($string_one, $string_two, $result);
	echo 'The similarity between is, '.$result.'<br>';

	//to check string length
	$string2 = 'This is an axample string';
	$string_length = strlen($string2);
	echo $string_length.'<br>';

	//trim function
	$stringy = ' this is an example of string trim function.&nbsp';
	$string_trimmed = trim($stringy);
	echo $string_trimmed.'<br>';

	//create variable using array

	$food = array('maggie'=>1300,'butter'=>34,'bread'=>89,'pasta'=>45);
	
	echo $food['maggie'];
	$food[3]='apple';
	print_r($food);
	echo '</br>';

	$foody = array('healthy'=>
							array('salad','vegetables'),
				'unhealthy'=>
							array('pizza','burger'));
	//echo $foody['healthy'][1];

	//(foreach(expression => value)

	foreach($foody as $element => $inner_array)
	{
		echo $element.'<br>';
		foreach($inner_array as $item)
		{
			echo $item.'<br>';
		}
	}

	//expression matching use preg_match function

	$stringgs = 'This is a string.';
	if(preg_match('/is/', $stringgs))
	{
		echo 'Match found'.'<br>';
	}
	else
	{
		echo 'Match not found'.'<br>';
	}


	function has_space($string123)
	{
		if(preg_match('/ /',$string123))  //it contains a space in between(/ /)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	$string123 = 'thisdoesnothaveaspace';

	if(has_space($string123))
	{
		echo 'has atleast one space';
	}
	else
	{
		echo 'no space in between';
	}
	//string length

	$srg = 'aishujpmc';
	$string_length = strlen($srg);
	//echo $string_length;
	for($x=1;$x<=$string_length;$x++)
	{
		echo $x.'<br>';
	}

	//to convert a string completely in lower case
	$strlo = 'Hey THERE CEO';
	$string_lower = strtolower($strlo);
	echo $string_lower.'<br>';

	$strup = 'hi am aishu'.'<br>';
	$string_upper = strtoupper($strup);
	echo $string_upper;


	if(isset($_GET['user_name']) && !empty($_GET['user_name']))
	{
		 $user_name = $_GET['user_name'];
		echo $user_name_lc = strtolower($user_name);

		if($user_name=='aishu')
		{
			echo 'u r the best'.'<br>';
		}
	}
	$offset = 0;
	$find = 'a';
	$find_length = strlen($find);
	$st = 'This is a string, and it is an example';
	
	//echo strpos($st,$find);
	while($string_position = strpos($st,$find,$offset))
	{
		echo '<strong>'.$find.'</strong>'. 'found at' .$string_position.'<br>';
		$offset = $string_position + $find_length;
	}

	//substring replace

	//takes 4 arguments
	// 1 = string
	// 2 = string which has to be replace
	// 3 = where we want to start
	// 4 = where we want to end

	$srg = 'This part don\'t search. This part search';
	$srg_new = substr_replace($srg,'alex', 29, 4 );
	echo $srg_new.'<br>';

	//string replace

	$sssr ='this is a string, and is an example.';
	$new_string = str_replace('is','',$sssr);
	//$new_string = str_replace('is','',$sssr);
	echo $new_string;



?>

<form action="functions.php" method="GET">
	Name: <input type="text" name="user_name"><br>
	<input type="submit" value="submit">
</form>


