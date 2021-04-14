<?php
    include 'conexion.php';

    $id_persona = $_POST['id_persona'];

    $query = "DELETE FROM personas WHERE id_persona = $id_persona";

    $stmt = $conexion->prepare($query);

    $stmt->execute();

    header("location:../index.php");
?>