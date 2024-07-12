<!DOCTYPE html>
<html lang="es" class="jugadores">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores por País</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 class="titulojugadores">Jugadores</h1>

    <div class="tablas_jugadores">
        <?php 
        $inc = include("conexion.php");
        if ($inc) {
            $consulta = "SELECT * FROM jugadores ORDER BY pais"; 
            $resultado = mysqli_query($con, $consulta);
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $currentCountry = null;
                while ($row = $resultado->fetch_array()) {
                    $pais = $row['pais'];

                    if ($pais !== $currentCountry) {
                        if ($currentCountry !== null) {
                            echo '</tbody></table></div>'; 
                        }
                        echo "<div class='tabla_pais'>";
                        echo "<h2>{$pais}</h2>"; 
                        echo "<table>";
                        echo "<thead><tr><th>Apellido</th><th>Nombre</th><th>Fecha de Nacimiento</th><th>Grupo</th><th>Selección</th><th>Número de Camiseta</th><th>Posición</th><th>Edad</th></tr></thead>";
                        echo "<tbody>";
                        $currentCountry = $pais;
                    }

                   
                    $apellido = $row['apellido'];
                    $nombre = $row['nombre'];
                    $f_nac = $row['f_nac'];
                    $grupo = $row['grupo'];
                    $seleccion = $row['seleccion'];
                    $num_camiseta = $row['num_camiseta'];
                    $posicion = $row['posicion'];
                    $edad = $row['edad'];

                    echo "<tr>";
                    echo "<td>{$apellido}</td>";
                    echo "<td>{$nombre}</td>";
                    echo "<td>{$f_nac}</td>";
                    echo "<td>{$grupo}</td>";
                    echo "<td>{$seleccion}</td>";
                    echo "<td>{$num_camiseta}</td>";
                    echo "<td>{$posicion}</td>";
                    echo "<td>{$edad}</td>";
                    echo "</tr>";
                }

            
                echo '</tbody></table></div>';
            } else {
                echo "<p>No se encontraron jugadores.</p>";
            }
        } 
        ?>
    </div>

    <div class="botones">
        <?php 
        $links = array(
            "portada.php" => "Portada",
            "equipos.php" => "Equipos",
            "partidos.php" => "Partidos",
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
