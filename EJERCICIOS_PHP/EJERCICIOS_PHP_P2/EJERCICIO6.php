<?php

$calendario=rand (1582,2100);

if (($calendario % 4 == 0 && $calendario % 100 != 0) || $calendario % 400 == 0) {
    print "Año: $calendario ES BISIESTO<br>";
} else {
    print "Año: $calendario NO ES BISIESTO<br>";
}
?>