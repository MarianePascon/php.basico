<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de idade assunto formularios</title>
</head>
<body>
    <h1>Calculo de idade</h1>

    <form action="decimoprimeiro.php"
    method="post">

    <p>Digite o nome:
        <input type="text" name="nome" required />
</p>

<p> Digite o ano de nascimento:
    <input type="text" name="nasc" required pattern="\d{4}" />
</p>

<p><input value="Calcular"

type="submit"/>
</p>
</form>

<?php

if(isset($_REQUEST["nome"]) and 
isset($_REQUEST["nasc"])) {
    $nome = $_REQUEST["nome"];
    $nasc = $_REQUEST["nasc"];
    $atual = date("Y");

    $idade = $atual - $nasc;

    echo "<p>" . $nome.
    " a sua idade é ". $idade.
    " anos.<p/>";
    
}
?>

</body>
</html>