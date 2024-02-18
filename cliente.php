<?php

$options = array( 
    'location' => 'http://localhost/webservices/tema1/server.php',
    'uri'      => 'http://localhost/webservices/tema1/'
);

$client = new SoapClient(NULL, $options);

$nombre = 'Sebas';

echo $client->saludar($nombre) . "!!" . "</br>";
echo "Ingrese la operación matemática que desea realizar (suma, resta, multiplicacion, division): ";
$operacion = readline();
echo "Ingrese el primer número: ";
$num1 = readline();
echo "Ingrese el primer número: ";
$num2 = readline();
echo "El resultado de su operación es: " . $client->operacion($num1, $num2, $operacion) . "</br>";


