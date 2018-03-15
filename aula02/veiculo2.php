<?php
echo "<pre>";

//Classe pai - Veiculo
//Classes Filhas - Moto, Carro, Bicicleta
//Criar na classe pai todas as características em comum das classes filhas
class Veiculo
{
	private $cor;
	private $banco;
	protected $velocidade;

	public function setCor($cor)
	{
		$this->cor = $cor;
	}
	public function getCor()
	{
		return $this->cor;
	}

	protected function acelerar(){}
	protected function freiar(){}
}
class Moto extends Veiculo
{
	public function acelerar()
	{
		$this->velocidade += 10;
	}
}
class Carro extends Veiculo
{
	public function acelerar()
	{
		$this->velocidade += 5;
	}
}
class Bicicleta extends Veiculo
{
	public function acelerar()
	{
		$this->velocidade += 2;
	}
}
$moto = new Moto();
$moto->acelerar();
$moto->setCor("Branco");
$moto->getCor();
$carro = new Carro();
$carro->setCor("Preto");
$carro->getCor();
$carro->acelerar();
$bicicleta = new Bicicleta();
$bicicleta->setCor("Verde");
$bicicleta->getCor();
$bicicleta->acelerar();
var_dump($moto,$carro,$bicicleta);