<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
setlocale(LC_MONETARY, 'es_MX');

require_once '../s/libs/lib.inc.php';
require_once '../s/main_functions.php';

medallistas();

function medallistas() {
    global $conn;
    $conn = conn();

    if ($conn) {
        try {
            $conn->beginTransaction();

            $query_medallistas2024 = "SELECT m.id, m.c_nombre, m.c_apellido_paterno, m.c_apellido_materno, m.c_tipo_medalla, m.c_url_foto,
                d.c_nombre AS nombre_deporte, cat.c_nombre AS nombre_categoria
            FROM 
                medallistas_uaq.t_un_2017_uanl AS m
            JOIN 
                medallistas_uaq.t_deportes AS d ON m.n_id_deporte = d.id
            LEFT JOIN 
                medallistas_uaq.t_categoria_deporte AS cat ON m.n_id_categoria = cat.id";

            $stmt = $conn->prepare($query_medallistas2024);
            $stmt->execute();
            
            if ($stmt->rowCount() < 1) {
                $conn->rollBack();
                devolverJSON(0, "No se encontraron datos");

                return false;
            }

            $datosMedallistas = [];            
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $datosMedallistas[] = array(
                    'id' => $row->id,
                    'c_nombre' => $row->c_nombre,
                    'c_apellido_paterno' => $row->c_apellido_paterno,
                    'c_apellido_materno' => $row->c_apellido_materno,
                    'nombre_deporte' => $row->nombre_deporte,
                    'c_tipo_medalla' => $row->c_tipo_medalla,
                    'nombre_categoria' => $row->nombre_categoria,
                    'c_url_foto' => stripslashes($row->c_url_foto)
                );
            }

            devolverJSON(1, '', $datosMedallistas);
            $conn->commit();
        } catch (PDOException $e) {
            if ($conn->inTransaction()) {
                $conn->rollBack();
            }

            $msg = "Ocurrió un error técnico: " . $e->getMessage();
            devolverJSON(0, $msg);
        }
    } else {
        $msg = "Ocurrió un error con el servicio.";
        devolverJSON(0, $msg);
    }
}

?>