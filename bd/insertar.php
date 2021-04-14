<?php
    include 'conexion.php';

    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $nombre = $_POST['nombre'];

    $query = "INSERT INTO personas(ap_paterno, ap_materno, nombre) VALUES('$ap_paterno', '$ap_materno', '$nombre');" ;

    $stmt = $conexion->prepare($query);

    $stmt->execute();

    header("location:../index.php");
?>