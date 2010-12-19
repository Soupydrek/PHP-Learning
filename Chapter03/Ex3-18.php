<?php
static $int = 0; 	//Allowed
static $int = 1+2;	//Disallowed (will produce a parse error)
static $int = sqrt(144); //Disallowed
?>