<?php 

class Carro {

	protected $modelo;
	protected $motor;

	public function andarCarro(){
		echo 'Carro andando';
	}
}
$carro = new Carro;
$carro->andarCarro();

 ?>