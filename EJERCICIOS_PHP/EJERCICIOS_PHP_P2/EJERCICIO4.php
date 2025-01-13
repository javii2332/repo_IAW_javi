<?php
$total_compra = rand(10 , 2000) / 10.0;
if ($total_compra < 30) {
    print "<p><strong>Compra más o te cobraremos 8,95€ de gastos de envio</strong></p>"; 
} elseif ($total_compra >= 30 && $total_compra < 90) {
    $falta = round(90 - $total_compra, 1); 
    print "<p><strong>Con solo $falta más podrás tener gastos de envio gratuitos</strong></p>"; 
} elseif ($total_compra >= 90) {
    print "<strong>Gastos de envío incluidos</strong>";
}
<br></br>
print "EL TOTAL DE SU COMPRA ES DE $total_compra";
?>