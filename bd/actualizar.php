<?php
    include 'conexion.php';

    $id_persona = $_GET['id_persona'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $nombre = $_POST['nombre'];

    $query = "UPDATE personas SET ap_paterno = '$ap_paterno', ap_materno = '$ap_materno', nombre = '$nombre'  WHERE id_persona = '$id_persona'";

    $stmt = $conexion->prepare($query);

    $stmt->execute();

    header("location:../index.php")
?>