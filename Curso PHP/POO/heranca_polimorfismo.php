<?php
	class Felino {
		var $mamifero = 'Sim';

		function correr () {
			echo 'Correr como felino';
		}
	}

	class Chita extends Felino {
		function correr() {
			echo 'Correr como chita 100KM/H';
		}
	}

	$chita = new Chita();

	echo $chita->mamifero .'<br>';
	$chita->correr();
?>