<?php

	$cpf = isset($_POST['cpf']) ? $_POST['cpf']: '';
	$total_string_cpf = strlen($cpf);


	if ($total_string_cpf != 11 && $cpf != ''){
		echo 'CPF invalido';
	}

?>

<form method="post" action="">
	<label>
		cpf:
		<input type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar">
</form>