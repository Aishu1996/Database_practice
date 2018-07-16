<?php
	//phpinfo();

/*error_reporting(0);
$text="hello world!!";

$var = 'Alex';
echo $var;*/

$text = "hello world";
//echo $number = 100;
//echo $text.$number;
$day = 'thursday';
$date = 31;
echo 'the date is ' .$day.' '.$date.'<br>';
echo "the date is $date $day".'<br>';

$text1 = 'something';
if($text1=='somethin')
{
	echo "true".'<br>';
}
else
{
	echo "false".'<br>';
}

$number = 12;
if($number!=10)
{
	echo "not equals to ten".'<br>';
}
else if($number==11)
{
	echo "number is eleven".'<br>';
}
else
{
	echo "not equal".'<br>';
}
//assignment operators

$num1 = 10;
$num2 = 20;
$num2+=3;
$result = $num1 + 5;
echo $result.'<br>';
echo $num2.'<br>';
if($num1<$num2)
{
	echo "right condition".'<br>';
}
else
{
	echo "wrong condition".'<br>';
}

$password="pass";
if($password=='pass')
{
	echo "correct".'<br>';
}
else
{
	echo "try again".'<br>';
}

//arithmetic operations
$sum= 10 + 20;
echo "$sum";

$ex = 359;
$upper = 1000;
$lower = 211;

if ($ex>=$lower && $ex<=$upper)
 {
 	echo "ok";
 }
else
{
	echo "not ok";
}

$no1='1';
$no2=1;
if($no1===$no2)
{
	echo "okay".'<br>';
}
else
{
	echo "not okay".'<br>';
}
$counter = 1;
while ($counter<= 10)
{
	echo $counter.'hey there.<br>';
	$counter++;
}

//do-while loops
$counte = 1;
do
{
	echo 'this will always show.<br>';
	$counte++;
}
while($counte<=10);
//the for loop
//die('ERROR. PAGE HAS ENDED');
for($set=1;$set<=10;$set++)
{
	echo $set.'<br>';
}



//switch statement
$eg = 1;
switch($eg)
{
	case 1:
		echo "one";
		break;
	case 2:
		echo "two";
		break;
	case 3:
		echo "three";
		break;		
	default:
		echo "invalid";	
}

$day = 'saturday';
switch ($day)
{
	case 'saturday':
	case 'sunday':
		echo "Its a weekend";
		break;
	default:
		echo "its a weekday";	
}

@mysql_connect('localhost','root','') or die('Could not connect to database.');

?>
<!-<input type="text" value="<?php echo $text;?>">
