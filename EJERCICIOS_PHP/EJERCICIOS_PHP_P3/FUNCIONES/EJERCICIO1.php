<?php
$edad = rand (1,99);

function esMayorDeEdad(int $edad): bool {
if ($edad >= 18) {
    return true;
} else {
    return false;
}
}
if (esMayorDeEdad($edad)) {
    print "EL USUARIO ES MAYOR DE EDAD\n";
} else {
    print "EL USUARIO ES MENOR DE EDAD\n";
}

?>
