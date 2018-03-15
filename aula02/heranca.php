<?php
echo "<pre>";

class Animal //classe pai
{
	public $raca;
	public $genero;

	public function comer(){

	}
	public function dormir(){

	}

}

class Cachorro extends Animal
{

}
class Gato extends Animal
{

}

$cao = new Cachorro();
$cao->raca = "vira-lata";
var_dump($cao);