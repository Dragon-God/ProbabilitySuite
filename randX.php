<?php
/*
*	Generates a random number between between two real numbers (both inclusive). 
*	Input: 
*		Two floating point numbers.
*	Output: 
*		A random floating point number.
*	@params 
*		float $a: A floating point number that forms either the lower or upper bound for the PRNG.
*		float $b: A floating point number that forms either the lower or upper bound for the PRNG.
*/
	function randX(float $a, float $b): float	
	{
		$max = max($a, $b);
		$min = min($a, $b);
		$x = $max - $min;
		$y = lcg_value()*$x;	
		return $min+$y;
	}
