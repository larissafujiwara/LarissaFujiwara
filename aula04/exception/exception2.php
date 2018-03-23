<?php

//soma
//nao permitir numeros negativos
//nao permitir resultado maior que 50
//subtraçao
//nao permitir resultado menor que zero
//divisao
//nao permitir divisao por zero
//nao permitir valor infinito $a ==0
//multiplicaçao
//nao permitir multiplicaçao por zero
//nao permitir resultado maior que 50

class SemNumerosNegativos extends Exception{}
class SemNumerosMaioresQue50 extends Exception{}
class SemNumerosMenoresQue0 extends Exception{}
class SemDivisaoPor0 extends Exception{}
class SemNumeroInfinitos extends Exception{}
class SemMultiplicacaoPor0 extends Exception{}
class SemResultadoMaior50 extends Exception{}