<?php

function sacar($conta, float $valorASacar)
{
	if ($valorASacar > $conta['saldo'])
	{
		exibeMensagem("Você não pode  sacar");
	}
	else
	{
		$conta ['saldo'] -= $valorASacar;
	}
	
	return $conta;
}
function depositar($conta, float $valorADepositar)
{
	if($valorADepositar > 0)
	{
	$conta['saldo'] += $valorADepositar;
	}
	else
	{
		exibeMensagem("depositos precisam ser positivos");
	}
	return $conta;
}

function exibeMensagem($mensagem)
{
	echo $mensagem . PHP_EOL;
}

function titularComLetrasMaiusculas(array &$conta)
{
	$conta['titular'] = mb_strtoupper{$conta['titular']};
}
