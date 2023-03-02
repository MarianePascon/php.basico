<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Desconto</h1>

 <form action="ex2.php">

    <p>Digite nome do produto:
        <input type="text" name="nome" required />
    </p>
    <p>Digite a quantidade:
        <input type="text" name="quant" required />
    </p>
    <p>Digite valor unitario:
        <input type="text" name="valor" required />
    </p>
    <p>Digite o desconto obtido:
        <input type="text" name="desc" required />
    </p>

    <p><input value="Calcular"type="submit"/></p>
 </form>

 <?php
 if ((isset($_REQUEST["nome"])) and 
 (isset($_REQUEST["quant"])) and (isset($_REQUEST["valor"])) and (isset($_REQUEST["desc"]))) {
    $nome = $_REQUEST["nome"];
    $quant = $_REQUEST["quant"];
    $valor = $_REQUEST["valor"];
    $desc = $_REQUEST["desc"];

    $total = ($quant * $valor) - $desc;

    echo "<p>". "Voce comprou ". $quant. " de ". $nome. " por ". $total. " e teve ". $desc. " reais de desconto." ."</p>";
 }

 ?>
</body>
</html>