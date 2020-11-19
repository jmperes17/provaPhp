<?php
include 'db.php';
$id_conta = $_POST['id_conta'];
$nome = $_POST['nome'];
$situacao = $_POST['situacao'];
$saldo = $_POST['saldo'];


#Inserção de conta ######################################################################

$id_conta = $_POST['id_conta'];
$nome = $_POST['nome'];
$situacao = $_POST['situacao'];
$saldo = $_POST['saldo'];

$query_inserir_conta=" INSERT INTO conta(nome, situacao, saldo)
VALUES('$nome','$situacao,'$saldo')";
mysqli_query($conexao,$query_inserir_conta);

#header('location:index.php?pagina=home');
#exit();

?>