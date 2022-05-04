<?php

$altura = 1.74;

$peso = 50;

$imc = $peso / $altura ** 2;

echo PHP_EOL;
echo "essa pessoa tem o peso de $peso kg e a altura de $altura cm" . PHP_EOL;
echo "portanto seu IMC é $imc" . PHP_EOL;

if ($imc < 18.5)
{
	echo  "essa pessoa está abaixo do seu IMC recomendado" . PHP_EOL;
}
elseif ($imc < 25)
{
	echo "essa pessoa está dentro do seu IMC recomendado" . PHP_EOL;
}
else
{
	echo "essa pessoa está acima do seu IMC recomendado" . PHP_EOL;
}
