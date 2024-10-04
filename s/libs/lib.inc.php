<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../s/main_functions.php';

if (basename($_SERVER['PHP_SELF']) == "lib.inc.php")
    exit;

function conn() {
    $server = "X";
    $puerto = "X"; // Puerto por defecto para MySQL
    $database = "X";
    $usuario = "X";
    $clave = "X";

    // DSN (Data Source Name) de MySQL
    $dsn = "mysql:host=$server;port=$puerto;dbname=$database;charset=utf8mb4";

    try {
        // Crear una nueva conexión PDO con los datos del servidor
        $pdo = new PDO($dsn, $usuario, $clave);
        
        // Configurar PDO para que arroje excepciones en caso de errores
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Configurar modo de fetch por defecto
       
        return $pdo;
    } catch (PDOException $e) {
        $msg = $e->getMessage();
        devolverJSON(0, $msg);

        return null;
    }
}
?>
