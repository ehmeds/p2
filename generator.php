<?php


//dictionaries

$symbolList = array ("!","@","#","$","%","^","&","*","(",")","_","+","<",">","?","/","~","=",",",".",":",";");
$wordList = array ("alphabet", "bizarre", "catastrophe", "dogmatic", "ephesus", "facade", "geronimo", "heresy", "igloo", "jungle", "kilobyte", "lampost", "maniac", "numerical", "onerous", "polaroid", "qatar", "rambunctious", "stargazer", "tumultuous", "umbrella", "violin", "whimsical", "xylophone", "yearning", "zebra");


//variables

$password;
$passwordsArray = array();
$wordCount = $_POST['wordsnumber'];
$numberyes = $_POST['numbers'];
$symbolyes = $_POST['symbols'];

//default constructor


	$passwordList = array();

for($i=0; $i < $wordCount;)	
	{
		$randIndex = mt_rand(0, 25);
		$passwordList[$i] = $wordList[$randIndex];
		$i++;
	}

	// return $passwordList;

	$password = implode ("-",$passwordList);

if ($numberyes)
{
	$password .= mt_rand(0, 99);
}

if ($symbolyes)
{
	$randIndex = mt_rand(0, count($symbolList)-1);
	$password .= $symbolList[$randIndex];
}

return $password;







?>