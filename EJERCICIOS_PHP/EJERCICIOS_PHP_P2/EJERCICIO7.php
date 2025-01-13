<?php

$dado1=rand (1,6);
$dado2=rand (1,6);
$dado3=rand (1,6);

print "Dado 1: $dado1<br>";
print "Dado 2: $dado2<br>";
print "Dado 3: $dado3<br>";

if ($dado1 == $dado2 && $dado2 == $dado3) {
    print "HA SALIDO UN TRIO";
} elseif ($dado1 == $dado2 || $dado2 == $dado3 || $dado1 == $dado3) {
    print "HA SALIDO UNA PAREJA";
} else {
    $mayor = max($dado1, $dado2, $dado3);
    print "EL MAYOR VALOR OBTENIDO ES $mayor";
}
?>