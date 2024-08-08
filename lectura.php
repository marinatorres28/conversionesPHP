<?php
// primero confirmamos si existen valores para realizar las operaciones
if (empty($_POST["origen"]) || empty($_POST["destino"]) || empty($_POST["cantidad"])) {
    echo "No se puede procesar su solicitud de conversion";
}
// guardamos en variables los datos recogidos en el formulario para poder trabajar con ellas
else {
    $origen=$_POST["origen"];
    $destino=$_POST["destino"];
    $cantidad=$_POST["cantidad"];
    /* las conversiones se pasan a tipo array asociativo */
    $conversiones=array();
    // un array asociativo siempre tiene clave=>valor
    // el array conversiones tiene un elemento y ese elemento tiene a su vez otro array que dentro tiene 3 claves y 3 valores
    $conversiones["Pulgadas"]=["Centimetros"=>2.54,"Metros"=>0.0254,"Kilometros"=>0.0000254];
    $conversiones["Pies"]=["Centimetros"=>30.48,"Metros"=>0.3048,"Kilometros"=>0.0003048];
    $conversiones["Yardas"]=["Centimetros"=>91.44,"Metros"=>0.9144,"Kilometros"=>0.0009144];
    $conversiones["Millas"]=["Centimetros"=>160900,"Metros"=>1609,"Kilometros"=>1.609];

    /* creamos el calculo */
    // $conversiones[Pulgadas][Metros]=0.0254
    $resultado=$conversiones[$origen][$destino]*$cantidad;
    // salida -> 1000 Millas son 160.9 metros
    echo $cantidad . " " . $origen . " " . " son " . $resultado . " " . $destino;
}