<?php

$edad=rand(1,99);

//DEFINICIÓN DE LA FUNCIÓN
function mayoredadmenor($edad)
{
    if ($edad >= 18) {
        print "<p>EL INDIVIDUO ES MAYOR DE EDAD</p>\n";   
    } else {
        print  "<p>EL INDIVIDUO ES MENOR DE EDAD</p>\n";
    }   
}

//LLAMADA A LA FUNCIÓN
mayoredadmenor($edad);
?>


<?php
$edad = rand (1,99);

function esMayorDeEdad(int $edad): bool
if ($edad >= 18) {
    return true;
} else {
    return false;
}

if (esMayorDeEdad($edad)) {
    print "EL USUARIO ES MAYOR DE EDAD\n";
} else {
    print "EL USUARIO ES MENOR DE EDAD\n";
}

?>

