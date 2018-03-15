<?php

trait Log;
{
	public function escreverLog($msg)
	{
		echo "Log da $msg";
	}
}

class X
{
use Log;

public function salvar()
	{
		$this->escreverLog("Trait");
	}
}
$x = new X();
$x->salvar();