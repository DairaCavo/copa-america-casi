<!DOCTYPE html>
<html lang="es" class="portada">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Portada</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="centralizacion">
        <h1 class="tituloportada">Copa America 2024</h1>
        
        <div class="botones">
            <?php 
            $links = array(
                "clasificados.php" => "Clasificados",
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
    </div>
</body>
</html>
