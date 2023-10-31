<?php

echo $data = date('y-m-d H:i');

$data_inicial = '2015-04-02';
$data_final = '2015-04-05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_time = $time_final - $time_inicial;

echo '<br>'.$diaSegundos = 24*60*60;
$diferenca_dias = $diferenca_time / $diaSegundos;

echo '<br>'.$diferenca_dias;

?>