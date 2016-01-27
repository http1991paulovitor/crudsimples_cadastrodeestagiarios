<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8" http-equiv="Content-type" content="text/html" charset="UTF-8">

    <title>CRUD LISTA</title>

    <link rel="stylesheet" href="_css/listagem.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>

</head>
<body>

<?php 
include("conexao.php");
?>

<table style="width:100%">

<?php

$Lista = mysql_query("Select * From crud_simples");

while($exibe = mysql_fetch_assoc($Lista)){


$cod = $exibe['codigo'];
echo"<tr><td>$cod&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>"; 	
echo "<td>".$exibe['nome']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp</td><td>".$exibe['email']."</td><td>".$exibe['telefone']."&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
echo "<td><a href=atualizar.php?codigo=$cod>Editar</a></td>";
echo "<td><a href=apagar.php?&codigo=$cod>Excluir</a></td>";

}

?>
</tr>
</table>

</body>
</html>
