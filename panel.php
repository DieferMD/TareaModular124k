<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel De Alumnos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
<center><h1>Panel De Alumnos</h1></center>

<br><br>

<table align="center" border="1" cellspacing="0" bgcolor="lightgray" width="800">
    <tr bgcolor="lightblue">
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>CÓDIGO UNIVERSITARIO</td>
        <td>TELEFONO</td>
        <td>PUNTOS</td>
        <td>RESULTADO</td>
    </tr>

    <?php


$fila = file("registro.xls");


$total = 0;
$cantBeneficiario = 0;
$cantNoBeneficiario = 0;


if (empty($fila)) {
    echo '<tr><td colspan="6" style="text-align:center;">No hay información disponible</td></tr>';
} else {
    for ($i = 0; $i < count($fila); $i++) {
        $total++;
        list($nombre, $apellido, $codigo, $telefono, $puntos, $resultado) = explode("\t", trim($fila[$i]));


        if (trim($resultado) == "Beneficiario") {
            $cantBeneficiario++;
        } else {
            $cantNoBeneficiario++;
        }
        ?>

        <tr>
        <tr>
            <td style="text-align: center;"><?php echo htmlspecialchars($nombre); ?></td>
            <td style="text-align: center;"><?php echo htmlspecialchars($apellido); ?></td>
            <td style="text-align: center;"><?php echo htmlspecialchars($codigo); ?></td>
            <td style="text-align: center;"><?php echo htmlspecialchars($telefono); ?></td>
            <td style="text-align: center;"><?php echo htmlspecialchars($puntos); ?></td>
            <td style="text-align: center;"><?php echo htmlspecialchars($resultado); ?></td>
        </tr>

        < /tr>
            <?php
    }
}
?>

</table>

<h1>Estadísticas</h1>
<p>Total de Clientes: <?php echo $total; ?></p>
<p>Total de Beneficiarios: <?php echo $cantBeneficiario; ?></p>
<p>Total de No Beneficiarios: <?php echo $cantNoBeneficiario; ?></p>


</body>

</html>
