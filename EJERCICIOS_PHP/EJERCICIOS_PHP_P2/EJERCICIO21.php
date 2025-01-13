<?php
// Array de idiomas (el primero es Español)
$idiomas = ["Español", "Inglés", "Francés", "Alemán", "Italiano"];

// Array bidimensional con palabras traducidas
$palabras = [
    ["Lunes", "Monday", "Lundi", "Montag", "Lunedì"],
    ["Martes", "Tuesday", "Mardi", "Dienstag", "Martedì"],
    ["Miércoles", "Wednesday", "Mercredi", "Mittwoch", "Mercoledì"],
    ["Jueves", "Thursday", "Jeudi", "Donnerstag", "Giovedì"],
    ["Viernes", "Friday", "Vendredi", "Freitag", "Venerdì"]
];

// Elegir una palabra y un idioma al azar
$palabraIndex = rand(0, count($palabras) - 1);
$idiomaIndex = rand(1, count($idiomas) - 1); // Evitar Español (índice 0)

// Construir el mensaje
$palabraEspañol = $palabras[$palabraIndex][0];
$palabraTraducida = $palabras[$palabraIndex][$idiomaIndex];
$idiomaSeleccionado = $idiomas[$idiomaIndex];

print "La palabra \"$palabraTraducida\" en \"$idiomaSeleccionado\" significa \"$palabraEspañol\" en Español.";
?>
