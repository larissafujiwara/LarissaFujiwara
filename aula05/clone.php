<?php

class aluno
{
	public function __clone(){
		echo "Estou Clonando";
	}
}

$a = new aluno();
$b = clone $a;