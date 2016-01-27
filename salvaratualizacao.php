<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8" http-equiv="Content-type" content="text/html">

    <title>PRINCIPAL</title>

    <link rel="stylesheet" href="_css/tela_principal.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>

</head>
<body>

<?php 
include("conexao.php");
?>

<?php

$cod = $_POST['tCodigo'];
$nome = $_POST['tNome'];
$email = $_POST['tEmail'];
$telefone = $_POST['tTel'];

?>
<?php 

mysql_query("UPDATE crud_simples SET nome='$nome',email='$email',telefone='$telefone' where codigo=$cod");

echo"Registro alterado com sucesso!";

?>

<br><br><br>
<a href="listagem.php">voltar</a>;

</body>
</html>
