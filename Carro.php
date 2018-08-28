<?php 

class Carro {

	protected $modelo;
	protected $motor;

	public function andarCarro(){
		echo 'Carro andando'."\n";
	}
}
$carro = new Carro;
$carro->andarCarro();

var_dump($carro);

 ?>