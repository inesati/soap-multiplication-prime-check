<?php include('nusoap.php'); ?>
<html>
<body>
<form id="formulario" action="cliente.php" method="get">
    Número: <input name="num" type="text">
    <input type="submit" value="enviar">
</form>

<?php
if ($_GET) {
    require_once('nusoap.php');

    // Crear un cliente SOAP
    $soapclient = new nusoap_client('http://localhost/soap/servermodified.php');

    // Obtener el numero del formulario
    $num = $_GET['num'];

    // Llamar a la funcion tablamultiplicar
    $resultado_tabla = $soapclient->call('tablamultiplicar', array('num' => $num));
    echo " la Tabla de multiplicar de $num es :<br>";
    foreach($resultado_tabla as $valor) {
        echo $valor."<br>";
    }

    // Llamar a la funcion es_primo
    $resultado_primo = $soapclient->call('es_primo', array('num' => $num));
    echo " Es primo?  " . ($resultado_primo ? "Sí" : "No") . "<br>";

    // Llamar a la funcion divisor
    $resultado_divisor = $soapclient->call('divisor', array('num' => $num));
    echo " El primer divisor primo es : " . $resultado_divisor . "<br>";
}
?>
</body>
</html>
