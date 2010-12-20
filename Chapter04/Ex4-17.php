<?php
//Ejemplo utilizando if...Or, donde el getnext no es llamado ya que el $finished es verdadero
if ($finished == 1 OR getnext() == 1)
	exit;
?>