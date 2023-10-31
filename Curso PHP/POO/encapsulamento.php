<?php
	class Veiculo{
		private $placa;
		private $cor;
		protected $tipo='Caminhonete';

		public function setPlaca($parametro_placa){
			$this->placa = $parametro_placa;
		}

		public function getNome(){
			return $this->placa ;
		}
	}


	class Carro extends Veiculo{
		public function exibirTipo(){
			echo $this->tipo;
		}
	}

	$carro = new Carro();
	$carro->exibirTipo();


?>