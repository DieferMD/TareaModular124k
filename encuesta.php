<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta Socioeconómica</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <center>
        <h1>Encuesta Socioeconómica</h1>
    </center>

    <form action="p_encuesta.php" method="post">
        <table align="center" cellpadding="10">
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" class="caja" 
               required pattern="[A-Za-záéíóúÁÉÍÓÚñÑ ]+" 
               title="Solo se permiten letras." 
               placeholder="Ingrese su Nombre" 
               oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ ]/g, '')"></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellido" class="caja" placeholder="Escribe tu Apellido" required pattern="[A-Za-záéíóúÁÉÍÓÚñÑ ]+" 
               title="Solo se permiten letras." 
               placeholder="Ingrese su Apellido" 
               oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ ]/g, '')"></td>
            </tr>
            <tr>
                <td>Código Universitario:</td>
                <td><input type="text" name="codigo" class="caja" placeholder="Introduce tu C.U." required pattern="[0-9]+" 
               title="Solo se permiten letras." maxlength="10" 
               placeholder="Ingrese su C.U." 
               oninput="this.value = this.value.replace(/[^0-9 ]/g, '')"></td>
            </tr>
            <tr>
                <td>Teléfono:</td>
                <td><input type="text" name="telefono" class="caja" 
                required 
                pattern="^[0-9]{9}$" 
       title="Solo se permiten 9 dígitos."
       placeholder="999999999" maxlength="9"
       oninput="this.value = this.value.replace(/[^0-9]/g, '')"></td>
            </tr>
            <tr>
                <td>1. ¿Cuenta con servicio a internet?</td>
                <td>
                    <input type="radio" name="internet" value="si" required> Sí
                    <input type="radio" name="internet" value="no" required> No
                </td>
            </tr>
            <tr>
                <td>2. Tipo de vivienda:</td>
                <td>
                    <select name="vivienda" class="caja" required>
                        <option value="propia">Propia</option>
                        <option value="alquilada">Alquilada</option>
                        <option value="familiar">De un familiar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>3. ¿Cuenta con algún dispositivo digital?</td>
                <td>
                    <input type="radio" name="dispositivo" value="si" required> Sí
                    <input type="radio" name="dispositivo" value="no"> No
                </td>
            </tr>
            <tr>
                <td>4. Ingreso económico en el hogar:</td>
                <td>
                    <select name="ingreso" class="caja" required>
                        <option value="<1000">Menos de 1000</option>
                        <option value="1000-3000">1000 a 3000</option>
                        <option value="3000-6000">3000 a 6000</option>
                        <option value=">6000">Más de 6000</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>5. En la actualidad está:</td>
                <td>
                    <select name="ocupacion" class="caja" required>
                        <option value="estudiando">Solo estudiando</option>
                        <option value="eventual">En trabajos eventuales</option>
                        <option value="fijo">En trabajo fijo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar Encuesta">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>