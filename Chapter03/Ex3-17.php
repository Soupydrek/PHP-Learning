<?php
function test()
{
	static $count = 0;
	echo $count;
	$count++;
}
echo test();
echo test();
echo test();
?>