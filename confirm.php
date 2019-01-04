<?
	function confirm(array $arr)	#Confirms that the supplied array has a valid probability distribution.
	{
		print("SUM: ".array_sum($arr)."<br>");
		return (round(array_sum($arr), 5) == 1)?true:false;
	}
?>