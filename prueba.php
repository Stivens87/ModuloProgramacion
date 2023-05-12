<?php

$host = "DESKTOP-H2JVRGK\SQLEXPRESS01";
$username = "usuarioArgos";
$password = "qwerty";
$dbname = "DBprogramacion";
$port = 1433;

try {
    $conexion = new PDO("sqlsrv:server = $host,$port; Database = $dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user = "juan";
    $pass = "12d";

    $sql = "{CALL log_in (?,?)}";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(1, $user, PDO::PARAM_STR);
    $stmt->bindParam(2, $pass, PDO::PARAM_STR);

    $stmt->execute();
    
    $encontrado = "";

    while ($row = $stmt->fetch()) {
        $encontrado = $row['nombre'];
    }
    echo $encontrado;
    echo "conecto";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
