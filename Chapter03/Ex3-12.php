<?php
function longdate($timestamp)
{
	return date("l, F jS Y", $timestamp);
}
echo "Fecha Actual: <br>";
echo longdate(time()); /* fecha actual */
echo "<br><br>Fecha Hace 17 Dias: <br>";
echo longdate(time() - 17 * 24 * 60 * 60 );	/* fecha hace 17 d’as */
?>