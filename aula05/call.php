<?php

class Aluno
{
	public function __call($metodo, array $parametros)
	{
		echo $metodo;
		echo "<br>";
		print_r($parametros);
	}
}

$a=getNome