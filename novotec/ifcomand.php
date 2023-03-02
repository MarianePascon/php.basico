<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF com and</title>
</head>
<body>
    <form action="" method="get">
        IF com and valor1 pra testar: <input type="number" name="number1" /> <br/>
        IF com and valor2 pra testar:  <input type="number" name="number2" /> <br/>
        <input type="submit" name="submit" value="Calcular"/>
</form>
<?php

    if(isset($_GET["number1"]) or (isset($_GET["number2"]))) {
        $numero1 = $_GET["number1"];
        $numero2 = $_GET["number2"];
       
        if (($numero1>10) or ($numero2<5)) {
            echo 'o codigo passou na parte1';
        } else{
            echo 'o codigo passou na parte2';
        }
    }
    ?>

</body>
</html>