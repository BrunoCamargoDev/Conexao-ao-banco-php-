<?php
// Inclui a conexão com o banco
include("conexao.php");
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$cor = $_POST['cor'];



if (isset($_POST['servicos'])) {
   $servicosSelecionados = $_POST['servicos'];
   $servicos = implode(", ", $servicosSelecionados);

} else {
    $servicos="";
}


// Comando sql para inserir no banco
$sql = "INSERT INTO cadastro (nome, tipo, cor, servicos) VALUES ('$nome', '$tipo', '$cor', '$servicos')";


// Executa e verifica
if (mysqli_query($conexao, $sql)) {
    echo "Serviço cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: ". mysqli_error($conexao);
}

// Fecha a conexão
mysqli_close($conexao);

?>