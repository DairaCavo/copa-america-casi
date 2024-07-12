<!DOCTYPE html>
<html lang="es" class="partidos">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partidos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 class="titulopartidos">Partidos</h1>

    <div class="tablas_partidos">
        <?php 
        $inc = include("conexion.php");
        if ($inc) {
            $consulta = "SELECT * FROM partidos";
            $resultado = mysqli_query($con, $consulta);
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                while ($row = $resultado->fetch_array()) {
                    $equipo1 = $row['equipo1'];
                    $grupo1 = $row['grupo1'];
                    $equipo2 = $row['equipo2'];
                    $grupo2 = $row['grupo2'];
                    $fase = $row['fase'];
                    $fecha = $row['fecha'];
                    $horario = $row['horario'];
                    $sede = $row['sede'];
                    ?>
                    <div class="tabla_partido">
                        <h2>Partido</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Equipo 1</th>
                                    <th>Grupo 1</th>
                                    <th>Equipo 2</th>
                                    <th>Grupo 2</th>
                                    <th>Fase</th>
                                    <th>Fecha</th>
                                    <th>Horario</th>
                                    <th>Sede</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $equipo1; ?></td>
                                    <td><?php echo $grupo1; ?></td>
                                    <td><?php echo $equipo2; ?></td>
                                    <td><?php echo $grupo2; ?></td>
                                    <td><?php echo $fase; ?></td>
                                    <td><?php echo $fecha; ?></td>
                                    <td><?php echo $horario; ?></td>
                                    <td><?php echo $sede; ?></td>
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
            "portada.php" => "Portada",
            "equipos.php" => "Equipos",
            "jugadores.php" => "Jugadores",
            "clasificados.php" => "Clasificados",
            "resultados.php" => "Resultados",
            "informacion.php" => "Información"
        );
        
        foreach ($links as $url => $texto) {
            echo "<p><a href=\"$url\">$texto</a></p>";
        }
        ?>
    </div>
</body>
</html>
