<!DOCTYPE html>
<html lang="es" class="portada">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación por Grupos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 class="tituloportada">Clasificación</h1>

    <div class="tablas">
        <?php
        $inc = include("conexion.php");
        if ($inc) {
            $grupos = array('A', 'B', 'C', 'D');

            foreach ($grupos as $grupo) {
                $consulta = "SELECT * FROM clasificados WHERE grupos = '$grupo'";
                $resultado = mysqli_query($con, $consulta);
                ?>
                <div class="tabla">
                    <h2>Grupo <?php echo $grupo; ?></h2>
                    <table>
                        <thead>
                            <tr>
                                <th>País</th>
                                <th>Grupo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($resultado && mysqli_num_rows($resultado) > 0) {
                                while ($row = $resultado->fetch_array()) {
                                    $paises = $row['paises'];
                                    $grupo = $row['grupos']; 
                                    ?>
                                    <tr>
                                        <td><?php echo $paises; ?></td>
                                        <td><?php echo $grupo; ?></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                               
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
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
