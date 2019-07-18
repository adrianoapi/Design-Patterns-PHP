<?php

require 'Orcamento.php';
require 'CalculadoraDeImpostos.php';

$reforma = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calculaICMS($reforma);

echo "<hr>";

echo $calculadora->calculaISS($reforma);