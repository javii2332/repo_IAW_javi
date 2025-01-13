<?php
generaNumero(): int {
    $num = rand(1,99999999);
    return $num;
}
calculaLetraNIF(int $num): string {
    $calcular = generaNumero() % 23
    $letras = ['T','R','W','A','G','M','Y','F',];
    return $letras[$calcular];
}

print "<p>EL NUMERO DE DNI ES: " . str_pad(generaNumero(), 8, "0", STR_PAD_LEFT) . calculaLetraNIF(generaNumero()) . "</p>\n";

?>



