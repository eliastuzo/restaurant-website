<?php
/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com
  
  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/

date_default_timezone_set('America/Mexico_City');
$hoy = getdate();
$mes = $hoy['mon'];
$año = $hoy['year'];



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



if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $satisfaccion = test_input($_POST["felicidad"]);
        $recomendacion = test_input($_POST["recomendar"]);
        $servicio = test_input($_POST["servicio"]);
        $comentarios = test_input($_POST["comentarios"]);
        $ticket = test_input($_POST["numeroticket"]);

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO reviews (numeroticket, año, mes, satisfaccion, recomendacion, servicio, comentarios) VALUES ('$ticket', '$año', '$mes', '$satisfaccion', '$recomendacion', '$servicio', '$comentarios');";
        $update = $conn->query($sql);
    
        $conn->close();
} else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>