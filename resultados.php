<!DOCTYPE html>
<html lang="es" class="resultados">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 class="tituloresultados">Resultados</h1>

    <div class="tablas_resultados">
        <?php 
        $inc = include("conexion.php");
        if ($inc) {
            $consulta = "SELECT * FROM resultados";
            $resultado = mysqli_query($con,$consulta);
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                while ($row = $resultado->fetch_array()) {
                    $fecha = $row['fecha'];
                    $equipo1 = $row['equipo1'];
                    $equipo2 = $row['equipo2'];
                    $hora = $row['hora'];
                    $resultado_equipo1 = $row['resultado_equipo1'];
                    $resultado_equipo2 = $row['resultado_equipo2'];
                    ?>
                    <div class="tabla_resultado">
                        <h2>Partido del <?php echo $fecha; ?></h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Equipo 1</th>
                                    <th>Equipo 2</th>
                                    <th>Hora</th>
                                    <th>Resultado Equipo 1</th>
                                    <th>Resultado Equipo 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $equipo1; ?></td>
                                    <td><?php echo $equipo2; ?></td>
                                    <td><?php echo $hora; ?></td>
                                    <td><?php echo $resultado_equipo1; ?></td>
                                    <td><?php echo $resultado_equipo2; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                }
            }
        }
        ?>
    </div>

    <div class="botones">
        <?php 
        $links = array(
            "clasificados.php" => "Clasificados",
            "portada.php" => "Portada",
            "jugadores.php" => "Jugadores",
            "partidos.php" => "Partidos",
            "equipos.php" => "Equipos",
            "informacion.php" => "Información"
        );
        
        foreach ($links as $url => $texto) {
            echo "<p><a href=\"$url\">$texto</a></p>";
        }
        ?>
    </div>
</body>
</html>
