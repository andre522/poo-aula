<?php

class Pessoa {
	protected $nome;


	public function andar(){
		echo 'Andando...';
	}
}

$obj = new Pessoa;
$obj->andar();

 ?>