<?php
$browser = get_browser(null, true); //return as a array = true
$browser = strtolower($browser['browser']);



if($browser!='chrome')
{
	echo 'you\'re not using google chrome. Please do!';
}
else
{
	echo 'Thankyou for using google chrome!';
}

?>