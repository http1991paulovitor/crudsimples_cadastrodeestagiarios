<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8" http-equiv="Content-type" content="text/html">

    <title>CADASTRADO</title>

    <link rel="stylesheet" href="_css/inserir.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>

</head>
<body>

<?php 
include("conexao.php");
?>


<?php

$nomecliente=$_POST["tNome"];
$emailcliente=$_POST["tEmail"];
$telefonecliente=$_POST["tTel"];

mysql_query("INSERT INTO crud_simples (codigo, nome, email, telefone) VALUES (null,'$nomecliente','$emailcliente','$telefonecliente')");

if(!$link)

{
	echo "erro ao conectar ao banco de dados!";
}

	echo "Dados cadastrados com sucesso!";

?>

<br><br>

<a href="tela_principal.html">VOLTAR A LISTA</a>

<br><br><br>
<a href="cadastrar.html">CADASTRAR NOVO ESTAGIÁRIO</a>;

</body>
</html>

