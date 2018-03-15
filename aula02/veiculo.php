<?php
echo "<pre>";

//Classe pai - Veiculo
//Classes Filhas - Moto, Carro, Bicicleta
//Criar na classe pai todas as características em comum das classes filhas
class Veiculo
{
	protected $cor;
	protected $banco;
	protected $velocidade;

	protected function acelerar(){}
	protected function freiar(){}
}
class Moto extends Veiculo
{
	public function acelerar()
	{
		$this->velocidade += 10;
		$this->cor = "vermelho";
	}
}
class Carro extends Veiculo
{
	public function acelerar()
	{
		$this->velocidade += 5;
		$this->cor = "azul";
	}
}
class Bicicleta extends Veiculo
{
	public function acelerar()
	{
		$this->velocidade += 2;
		$this->cor = "cinza";
	}
}
$moto = new Moto();
$moto->acelerar();
$carro = new Carro();
$carro->acelerar();
$bicicleta = new Bicicleta();
$bicicleta->acelerar();
var_dump($moto,$carro,$bicicleta);