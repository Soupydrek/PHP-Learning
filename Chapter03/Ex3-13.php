<?php
function longdate($timestamp)
{
	$temp = date("l, F jS Y", $timestamp);
	return "The date is:<br>$temp";
}

echo longdate(time());
?>