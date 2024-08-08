<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversion de distancias</title>
</head>
<body>
<h1>Convertimos Distancias</h1>
<form action="lectura.php" method="post">
    <p>
        Convertir de:
        <label for="pulgadas">Pulgadas</label> <input type="radio" name="origen" id="pulgadas" value="Pulgadas">
        <label for="pies">Pies</label> <input type="radio" name="origen" id="pies" value="Pies">
        <label for="yardas">Yardas</label> <input type="radio" name="origen" id="yardas" value="Yardas">
        <label for="millas">Millas</label> <input type="radio" name="origen" id="millas" value="Millas">
    </p>

    <p>
        <label for="cantidad">Indique la cantidad que desea convertir</label>
        <input type="number" id="cantidad" name="cantidad">
    </p>

    <p>
        Convertir a:
        <label for="centimetros">Centimetros</label> <input type="radio" name="destino" id="centimetros" value="Centimetros">
        <label for="metros">Metros</label> <input type="radio" name="destino" id="metros" value="Metros">
        <label for="kilometros">Kilometros</label> <input type="radio" name="destino" id="kilometros" value="Kilometros">
    </p>

    <p>
        <input type="submit" value="Calcular">
    </p>

    
    
</form>

</body>
</html>
<?php
