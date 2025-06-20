<?php
/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com
  
  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/
 
$id = $_GET['id'];

require 'envhelper.php';
loadEnv(__DIR__ . '/../.env');

//DB DOMAIN 
$servername = $_ENV['DB_HOST'];
// REPLACE with your Database name
$dbname = $_ENV['DB_NAME'];
// REPLACE with Database user
$username = $_ENV['DB_USER'];
// REPLACE with Database user password
$password = $_ENV['DB_PASS'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM articulos WHERE id = '$id'";
$articulos = $conn->query($sql);


$conn->close();

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meow+Script&family=Miniver&family=Sacramento&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/articulo.css">
    <title>Espresso Central|Artículo</title>
</head>
<body>
    <header class="header">
        <img src="img/cafe-icon.png" alt="" class="header__logo">
        <nav class="enlaces">
            <a class="enlace" href="locaciones.html">Mapa cafetero</a>
            <a class="enlace" href="topdetops.html">Top de tops</a>
            <a class="enlace" href="menu.html">Menú</a>
            <a class="enlace" href="masquecafe.html">Más que café</a>
            <a class="enlace enlace__activo" href="blog.php">Blog</a>
        </nav>
    </header>

    <section class="section">
        <?php
            while ($articulo = mysqli_fetch_assoc($articulos)): 
        ?>
        <h1><?php echo $articulo['titulo']; ?></h1>
        <div class="articulo">
            <img src="img/<?php echo $articulo['nombreimagen'] . '.jpg'; ?>" alt="granos cafe" class="float-image">
            <?php echo $articulo['contenido']; ?>
        </div>
        <?php 
            endwhile; 
        ?>
    </section>


    <footer class="footer">
        <div class="contenedor-izquierdo">
            <img src="img/cafe-icon.png" alt="" class="footer__img">
            <div class="datos">
                <h3>Espresso Central</h3>
                <p>771 153 2524</p>
                <p>mustardmoe@gmail.com</p>
            </div>
        </div>
        <div class="contenedor-derecho">
        <a class="footer_enlace" href="https://www.facebook.com/ESPRESSO.CENTRAL">
                <img src="img/Facebook-icon.png" alt="" class="footer__enlace--img">
            </a>
            <a class="footer_enlace" href="https://www.instagram.com/espressozen/">
                <img src="img/Instagram-icon.png" alt="" class="footer__enlace--img">
            </a>
            <a class="footer_enlace" href="https://x.com/EspressoZen">
                <img src="img/twitter-icon.png" alt="" class="footer__enlace--img">
            </a>
        </div>
    </footer>

    <!-- Linking SwiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Linking JQuery script -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Linking Bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <!-- Linking custom script -->
    <script src="index.js"></script> 
</body>
<?php echo $articulo['id']; ?>