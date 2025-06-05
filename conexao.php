<?php
// Dados do banco de dados

$servidor = "localhost";
$usuario = "usuario";
$senha = "senha";
$banco = "Nome do banco";

// Criando a conexão 
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

// Verificando a conexão 
if (!$conexao) {
    die("Falha na conexão: ".mysqli_connect_error());
}
?>