<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];

    // Crear un arreglo asociativo con los datos recibidos
    $datos = array(
        "nombre" => $nombre,
        "email" => $email,
        "apellido" => $apellido,
        "proceess" =>  "success"
    );

    // Convertir el arreglo a JSON
    $jsonDatos = json_encode($datos);

    // Mostrar los datos en formato JSON
    header('Content-Type: application/json');
    echo $jsonDatos;
} else {
    // Mostrar un mensaje de error si no se ha recibido nada
    echo "No se han recibido datos.";
}
?>