<?php
switch ($page){
	case "Home": echo "You selected Home";
		break;
	case "About": echo "You selected About";
		break;
	case "Login": echo "You selected Login";
		break;
	default: echo "Unrecognized selection";
		break;
}
?>