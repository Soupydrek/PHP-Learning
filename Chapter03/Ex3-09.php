<?php
	$author = "Alfred E Newman";
	// Tag puede ser cualquier nombre, no exactamente "_SECTION", tampoco es necesario el "_"
	// su utilidad es para diferenciar entre etiqueta no más, buenas practicas
	$out = <<<_SECTION
	This is a headline    		    
	
	This is the first line.
	This is the second.
	-Written by $author.
_SECTION;

	echo $out;
?>