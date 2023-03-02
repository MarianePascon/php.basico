<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Jogo de dados</h1>
<form action="ex3.php">
    <p>Digite quantas vezes o dado será lançado:
        <input type="text" name="quant" required/>
</p>
<p><input value="Confirmar"type="submit"/></p>
 </form>


    <?php
    if (isset($_REQUEST["quant"])) {
        $quant = $_REQUEST["quant"];

        for($i = 1 ; $i <= $quant ; $i++) {

            $lado = rand (1, 6);
            echo "<img src='Imagens/dado_". $lado. ".png'>";
        }
    }

    ?>
</body>
</html>

