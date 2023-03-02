<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculo de area</h1>

    <form action="ex4.php">
 <p> Digite a largura:
            <input type="text" name="largura">
</p>
<p> Digite a altura:
            <input type="text" name="altura">
</p>

<p><input value="Confirmar"type="submit"/></p>
</form>

<?php
 if ((isset($_REQUEST["largura"])) and (isset($_REQUEST["altura"]))) {
    $largura = $_REQUEST["largura"];
    $altura = $_REQUEST["altura"];
    $area = $largura * $altura;

    echo "<p>" . "A area é ". $area. "</p>";

    if($largura == $altura){
        echo "<img src='imagens/quadrado.jpg'>";
    } else{
      echo  "<img src='imagens/retangulo.jpg'>";
    }
 }
 ?>
</body>
</html>