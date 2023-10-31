<?php 

require_once("funcoes_desconto.php");

$valor_total = 800;
$valor_desconto = 10;
$valor_total_com_desconto = calcula_Desconto($valor_total, $valor_desconto);

?>

Valor total: <?php echo $valor_total ?> <br> 
Valor desconto: <?php echo$valor_desconto ?>%<br>
Valor total com desconto: R$ <?php echo $valor_total_com_desconto?>



