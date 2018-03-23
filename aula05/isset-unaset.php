<?php

class Aluno
{
	public function __isset($name)
	{
		echo $name . "Está setado?";
	}
	public function __unset($name)
	{
		echo 'apagando'. $name;
	}
}
