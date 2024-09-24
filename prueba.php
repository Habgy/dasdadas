<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario

    $email = $_POST["email"];
    $nombre = $_POST["nombre"];

    if (empty($email) && empty($nombre)) {

    $ruta_archivo = "./Datos.txt";
    }
}


