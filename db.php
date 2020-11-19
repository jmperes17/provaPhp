<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "prova";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);
#Chuteiras
$query_conta= "SELECT * FROM conta";
$result_conta= mysqli_query($conexao,$query_conta); 





?>














