<!DOCTYPE html>
<html lang="es" class="equipos">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 class="tituloportada">Equipos</h1>

    <div class="tablas">
        <div class="tabla">
            <h2>Lista de Equipos</h2>
            <table>
                <thead>
                    <tr>
                        <th>País</th>
                        <th>Grupo</th>
                        <th>Cantidad de jugadores</th>
                        <th>DT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $inc = include("conexion.php");
                    if ($inc) {
                        $consulta = "SELECT * FROM equipos";
                        $resultado = mysqli_query($con, $consulta);
                        if ($resultado && mysqli_num_rows($resultado) > 0) {
                            while ($row = $resultado->fetch_array()) {
                                $pais = $row['pais'];
                                $grupo = $row['grupo'];
                                $cantidad_jugadores = $row['cantidad_jugadores'];
                                $DT = $row['DT'];
                                ?>
                                <tr>
                                    <td><?php echo $pais; ?></td>
                                    <td><?php echo $grupo; ?></td>
                                    <td><?php echo $cantidad_jugadores; ?></td>
                                    <td><?php echo $DT; ?></td>
                                </tr>
                                <?php
                            }
                        } 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="botones">
        <?php 
        $links = array(
            "clasificados.php" => "Clasificados",
            "portada.php" => "Portada",
            "jugadores.php" => "Jugadores",
            "partidos.php" => "Partidos",
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
