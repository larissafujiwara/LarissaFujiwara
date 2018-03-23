<?php

class Aluno
{
	public $nome;

	public function __set($prop,$value){
		echo $prop . ' - '. $value;
	}
}

$aluno = new Aluno();
$aluno->nome="Larissa";
$aluno->email="larissa@email.com";