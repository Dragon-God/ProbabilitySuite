<?
/*
*	This file contains some functions that can be used for assigning probabilities to an array of elements or selecting an element from said array with a given probability.
*/

require_once("../displayArray.php");
require_once("confirm.php");
require_once("randX.php");
require_once("probGen.php");
require_once("probSelect.php");

$test = ["California" => 0.37, "Florida" => 0.13, "New York" => 0.28, "Washington" => 0.22];
$testX = array_keys($test);

var_dump(confirm(probGen($testX)));
/*	for ($i = 0; $i < 100; $i++) 
	{ 
		print(var_dump(confirm(probGen($testX))));
	}*/
?>