<?php

$idade = 16;

echo "\tVc só pode entrar se tiver [18] anos" . PHP_EOL;

if ($idade >= 18)
{
	echo "\t\tVc tem [$idade] anos. Pode entrar";
}
elseif ($idade < 18)
{
	$falta = 18 - $idade;
	echo "\t\tVc tem [$idade] anos.Falta [$falta] anos para vc poder entrar";
}
