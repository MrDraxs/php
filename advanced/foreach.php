<?php
$contascorrentes = [
	'123.456.789-09' => ['titular' => 'Vinicius', 'saldo' => 1000]
,	'102.938.234-56' => ['titular' => 'Maria', 'saldo' => 10000]
,	'372.745.974-87' => ['titular' => 'Alberto', 'saldo' => 300]
];

foreach($contascorrentes as $cpf => $conta)
{
	echo $conta['titular'];
	echo " de cpf $cpf tem um saldo de ";
	echo $conta['saldo'] . PHP_EOL;
}
