<?php 

require_once("funcoes_validar.php");

$login_usuario = $_POST['login'];
$senha_usuario = $_POST['senha'];

$usuario_validado = valida_login($login_usuario, $senha_usuario);

if($usuario_validado) {
	echo 'Acesso Liberado';
} else{
	'Acesso negado';
}


?>