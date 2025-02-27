<?php
require_once "nusoap.php";

// la Funcion que genera la tabla de multiplicacion 
function tablamultiplicar($num) {
    $tabla[0] = $num * 1;
    $tabla[1] = $num * 2;  
    $tabla[2] = $num * 3;  
    $tabla[3] = $num * 4;  
    $tabla[4] = $num * 5;  
    $tabla[5] = $num * 6;  
    $tabla[6] = $num * 7;  
    $tabla[7] = $num * 8;  
    $tabla[8] = $num * 9;  
    $tabla[9] = $num * 10;  

    return $tabla;
}

// Función que verifica si un número es primo
function es_primo($num) {
    if ($num <= 1) return false; // aqui los numeros menores o iguales a 1 no son primos
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // aqui si es divisible, no es primo
        }
    }
    return true; //  en este caso es primo
}

// la Funcion que devuelve el primer divisor primo de un número
function divisor($num) {
    if ($num <= 1) return 1; // 1 es primo no tiene divisores primos
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0 && es_primo($i)) {
            return $i; // Retorna el primer divisor primo
        }
    }
    return 1; // Si no hay divisores primos, retorna 1
}

// Crear el servidor SOAP
$server = new soap_server();
$server->register("tablamultiplicar");
$server->register("es_primo");
$server->register("divisor");
$server->service(file_get_contents('php://input'));
