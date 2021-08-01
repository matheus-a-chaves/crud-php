<?php
include("conexao.php");
$numero = $_POST['numero'];
$nome = $_POST['nome'];
$data = $_POST['data'];


$query = "INSERT INTO filme(filme_id, filme_nome, filme_dataLancamento) VALUES ($numero, '$nome', '$data')";
$result = mysqli_query($conexao, $query);
$exibir = mysqli_fetch_array($result);

header("location:../../index.php");
?>