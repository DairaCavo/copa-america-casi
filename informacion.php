<html lang="es" class="informacion">
    <head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1 class="tituloinformacion">Informacion adiccional de las copas americas pasadas </h1>
<div class="botones">
        <?php 
        $links = array(
            "portada.php" => "Portada",
            "equipos.php" => "Equipos",
            "jugadores.php" => "Jugadores",
            "partidos.php" => "Partidos",
            "resultados.php" => "Resultados",
            "clasificados.php" => "Clasificados",
        );
        
        foreach ($links as $url => $texto) {
            echo "<p><a href=\"$url\">$texto</a></p>";
        }
        ?>
    </div>
</body>
</html>