<?php
    include 'conexion.php';

    $query = "SELECT * FROM personas ORDER BY id_persona";

    $stmt = $conexion->prepare($query);

    $stmt->execute();

    $stmt->bind_result($id_persona, $ap_paterno, $ap_materno, $nombre);
?>