<?php
include("conexao.php");
$numero = $_GET['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];


$query = "UPDATE filme SET filme_nome='$nome', filme_dataLancamento='$data' WHERE filme_id = $numero";
$result = mysqli_query($conexao, $query);
mysqli_fetch_array($result);

header("location:../../index.php");
?>