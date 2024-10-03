<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$codigo = $_POST["codigo"];
$telefono = $_POST["telefono"];
$internet = $_POST["internet"];
$vivienda = $_POST["vivienda"];
$dispositivo = $_POST["dispositivo"];
$ingreso = $_POST["ingreso"];
$ocupacion = $_POST["ocupacion"];

$puntos = 0;

if ($internet == "no") {
    $puntos += 5;
}

switch ($vivienda) {
    case "propia":
        $puntos += 1;
        break;
    case "alquilada":
        $puntos += 3;
        break;
    case "familiar":
        $puntos += 5;
        break;
}

if ($dispositivo == "si") {
    $puntos += 5;
}

switch ($ingreso) {
    case "<1000":
        $puntos += 5;
        break;
    case "1000-3000":
        $puntos += 3;
        break;
    case "3000-6000":
        $puntos += 1;
        break;
    case ">6000":
        $puntos += 0;
        break;
}

switch ($ocupacion) {
    case "estudiando":
        $puntos += 5;
        break;
    case "eventual":
        $puntos += 3;
        break;
    case "fijo":
        $puntos += 0;
        break;
}

if ($puntos > 15 && $internet == "no") {
    $resultado = "Beneficiario";
    echo "<script>
        alert('Felicidades eres beneficiario');
        window.location.href = 'panel.php'; // Redirigir de vuelta al formulario o a otra página
      </script>";
} else{
    $resultado = "No Beneficiario";
    echo "<script>
        alert('No eres beneficiario');
        window.location.href = 'panel.php'; // Redirigir de vuelta al formulario o a otra página
      </script>";
}

$archivo=fopen("registro.xls","a+");

    $registro=$nombre."\t".$apellido."\t".$codigo."\t".$telefono."\t".$puntos."\t".$resultado."\n";
    fwrite($archivo,$registro);

fclose($archivo);

echo "<h1>Resultados de la Encuesta</h1>";
echo "<strong>Nombre:</strong> " . $nombre . " " . $apellido . "<br>";
echo "<strong>Código Universitario:</strong> " . $codigo . "<br>";
echo "<strong>Teléfono:</strong> " . $telefono . "<br>";
echo "<strong>Puntos Obtenidos:</strong> " . $puntos . "<br>";
echo "<strong>Resultado:</strong> " . $resultado . "<br>";


?>
