<?php



$idadeEmDias = intval(readline("Digite sua idade em dias: "));
$anos =  (int) ($idadeEmDias / 365);
$meses = (int) (($idadeEmDias % 365) / 30);
$dias =  (int) (($idadeEmDias % 365) % 30);


echo "$anos ";
echo $anos <= 1 ? "ano" : "anos";
echo "\n$meses ";
echo $meses <= 1 ? "mês" : "meses";
echo "\n$dias ";    
echo $dias <= 1 ? "dia" : "dias";

