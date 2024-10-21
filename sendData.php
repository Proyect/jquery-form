<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $id = $_POST["id"];
    $nombre = $_POST["name"];
    $apellido = $_POST["lastName"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    // Crear un arreglo asociativo con los datos recibidos
    $datos = array(
        "id" => $id,
        "nombre" => $nombre,
        "email" => $email,
        "apellido" => $apellido,
        "tel" => $tel,
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