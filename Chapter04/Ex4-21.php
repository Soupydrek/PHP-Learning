<?php
$bank_balance = 220;
echo "Tu Balance en el Banco es: $bank_balance<br /><hr>";

if($bank_balance < 100){
	$money += 1000;
	$bank_balance += $money;
}
elseif ($bank_balance > 200){
	$savings += 100;
	$bank_balance += $savings;
}
else{
	$savings += 50;
	$bank_balance += $savings;
}

echo "Tu Nuevo Balance en el Banco es: $bank_balance";
?>