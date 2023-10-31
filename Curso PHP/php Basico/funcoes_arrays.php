<?php
/*
$array = array('mac', 'linux','windows');
$retorno = in_array('mac', $array);

if ($retorno) {
	echo 'Verdadeiro';
} else {
	'Falso';
} 

$produtos = array(10=>'Notebook', 11=>'Teclado');
$chaves_array = array_keys($produtos);

var_export( $chaves_array); 

$frutas = array (0=>'Banana', 1=>'Amora', 2=>'Carambola');
	sort($frutas);
	asort($frutas);

var_export($frutas);

$itens_array = count($frutas);
echo '<br>'.$itens_array; 

$array1 = array('mac', 'linux');
$array2 = array('windows',);

$novo_array = array_merge($array1, $array2);

var_export($novo_array);*/

$string = '20/10/2020';
$retorno = explode('/', $string);

$nova_string = implode('/', $retorno);
echo $nova_string;

?>