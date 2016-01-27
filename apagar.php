<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8" http-equiv="Content-type" content="text/html">

    <title>APAGADO</title>

    <link rel="stylesheet" href="_css/apagar.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>

</head>
<body>
<?php 
include("conexao.php");

?>

<?php 

$id = $_GET['codigo'];

$deleta = mysql_query("DELETE FROM crud_simples WHERE codigo ='$id'");


if($deleta == ''){

echo"Erro ao deletar registro!";

}else{

echo"Registro excluido com sucesso!";

}


?>

<br><br>
<a href="listagem.php">VOLTAR A LISTA</a>;

</body>
</html>
