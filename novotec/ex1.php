<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Calculo de média</h1>

    <form action="ex1.php"
    method="post">

    <p>Digite um numero:
        <input type="text" name="pri" required />
    </p>

    <p>Digite um numero:
        <input type="text" name="seg" required />
    </p>

    <p>Digite um numero:
        <input type="text" name="ter" required />
    </p>

    <p>Digite um numero:
        <input type="text" name="qua" required />
    </p>

    <p><input value="Calcular"

type="submit"/>
</p>
</form>

<?php

 if ((isset($_REQUEST["pri"])) and 
 (isset($_REQUEST["seg"])) and (isset($_REQUEST["ter"])) and (isset($_REQUEST["qua"]))) {
 $pri = $_REQUEST["pri"];
 $seg = $_REQUEST["seg"];
 $ter = $_REQUEST["ter"];
 $qua = $_REQUEST["qua"];

 $media = ( $pri + $seg + $ter + $qua ) /4;

 echo "<p> Sua média é ". $media. ".</p>";
 }
 ?>
</body>
</html>