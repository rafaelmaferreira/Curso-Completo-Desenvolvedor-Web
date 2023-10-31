<?php
 function calcula_Desconto($valor_total, $valor_desconto) {

 	$valor_desconto = $valor_total * ($valor_desconto/100);

 	$valor_total_com_desconto = $valor_total - $valor_desconto;

 	return $valor_total_com_desconto;

 }

?>