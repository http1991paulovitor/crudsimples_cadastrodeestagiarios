<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8" http-equiv="Content-type" content="text/html">

    <title>ALTERAR</title>

    <link rel="stylesheet" href="_css/atualizar.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>

</head>
<body>

<?php 
include("conexao.php");
?>

<?php

$codigo=$_GET['codigo'];

$Pesquisa = mysql_query("Select * From crud_simples where codigo=$codigo");
while($executa = mysql_fetch_assoc($Pesquisa)){

$cod = $executa['codigo'];
$nome = $executa['nome'];
$email = $executa['email'];
$telefone = $executa['telefone'];

}

?>
    <div id="interface">

                <form method="post" id="" action="salvaratualizacao.php">

                    <fieldset id="usuario">

                        <legend>ALTERAR DADOS:</legend>
                        <p><label for="cNome">Matricula:<input type="text" name="tCodigo" value="<?php echo $cod;?>" id="cNome" size="20" maxlength="30" placeholder="Nome Completo" required readonly="true"></label></p>
                        <p><label for="cNome">Nome:<input type="text" name="tNome" value="<?php echo $nome;?>" id="cNome" size="40" maxlength="40" placeholder="Nome Completo" required></label></p>
                        <p><label for="cEmail">E-mail:<input type="email" name="tEmail" value="<?php echo $email;?>" id="cEmail" size="20" maxlength="40" placeholder="Email" required></label></p>
                        <p><label for="cTel">Telefone:<input type="tel" name="tTel" value="<?php echo $telefone;?>" id="cTel" size="15" maxlength="15" placeholder="Telefone" required></label></p>

                    </fieldset>

                    <br>

                    <input type="submit" value="SALVAR REGISTRO ALTERADO"> <br><br><br>

                </form>
                <form method="post" id="" action="listagem.php">
                    <input type="submit" value="VOLTAR A LISTA SEM ALTERAR">
                </form>

    </div>
</body>
</html>
