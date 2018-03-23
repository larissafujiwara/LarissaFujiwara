<?php

require '../config/config.php';
require '../autoload.php';

use Lib\FrontController\FrontController;

//rotas
//usuarios -> Lista de usuarios
//usuarios/new -> Criar usuario
//usuarios/edit -> Editar usuario
//?rota=usuarios&acao=index

(new FrontController())->run();