<?php
$min = 1;
$max = 6;
$n = rand (5, 10);

function generaMatrizEnterosRand(int $n, int $min, int $max): array {
    
    $m = [];
    for ($i=1; $i<=$n; $i++) {
        $m [] = rand($min, $max); 
    }
    return $m;
}

function escribeValoresDados(array $m): void {
    print "VALORES DE LOS DADOS ORIGINAL\n";
    foreach ($m as $valor1) {
        print "$valor1\n";
    }
    print "VALORES DE LOS DADOS ORDENADOS\n";
    sort($m);
    foreach ($m as $valor2) {
        print "$valor2\n";
    }
    print "VALORES DE LOS DADOS SIN REPETIR\n";
    $final = array_unique($m);

    print "<pre>\n"; print_r($final); print "</pre>\n";
    
}

// Genera los valores de los dados
$dados = generaMatrizEnterosRand($n, $min, $max);

// Muestra los resultados
escribeValoresDados($dados);

?>