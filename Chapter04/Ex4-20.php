<?php
$bank_balance = 80;
echo "Tu Balance en el Banco es: $bank_balance<br /><hr>";

if ($bank_balance < 100){
	$money += 1000;
	$bank_balance += $money;
}
else {
	$savings +=50;
	$bank_balance += $savings;
}

echo "Tu Nuevo Balance en el Banco es: $bank_balance";
?>