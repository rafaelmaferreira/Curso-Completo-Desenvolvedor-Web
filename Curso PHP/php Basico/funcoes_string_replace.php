<?php

//Str_Replace
$texto = '435.615.388-00';

$cpf = str_replace('.', '', $texto);
$cpf = str_replace('-', '', $cpf);

echo $cpf;
?>