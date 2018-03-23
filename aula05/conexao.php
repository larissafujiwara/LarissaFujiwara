<?php
echo "<pre>";

$conexao = new PDO('pgsql:host=localhost;dbname=aula5','lari','1234');

//var_dump($conexao);
$sql="INSERT INTO tb_alunos(nome,email,senha,cpf,rg,dtNasc) VALUES ('Larissa', 'larissa@email.com','123','44435666863','393410857','1996-01-10')";	

$conexao->exec($sql);

$sql = "SELECT*FROM tb_alunos";
$result = $conexao->query($sql);
$alunos = $result->fetchAll(PDO::FETCH_ASSOC);

print_r($alunos);