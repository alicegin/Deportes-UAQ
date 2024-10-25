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
                    
            $medallistas_uaq = array(
                'medallistas_2001_v' => getMedallistasData($conn, getMedallistasQuery('t_un_2001_v')),
                'medallistas_2002_bc' => getMedallistasData($conn, getMedallistasQuery('t_un_2002_bc')),
                'medallistas_2003_c' => getMedallistasData($conn, getMedallistasQuery('t_un_2003_c')),
                'medallistas_2006_m' => getMedallistasData($conn, getMedallistasQuery('t_un_2006_m')),
                'medallistas_2007_uanl' => getMedallistasData($conn, getMedallistasQuery('t_un_2007_uanl')),
                'medallistas_2008_g' => getMedallistasData($conn, getMedallistasQuery('t_un_2008_g')),
                'medallistas_2009_uaem' => getMedallistasData($conn, getMedallistasQuery('t_un_2009_uaem')),
                'medallistas_2011_uamex' => getMedallistasData($conn, getMedallistasQuery('t_un_2011_uamex')),
                'medallistas_2012_v' => getMedallistasData($conn, getMedallistasQuery('t_un_2012_v')),
                'medallistas_2013_s' => getMedallistasData($conn, getMedallistasQuery('t_un_2013_s')),
                'medallistas_2014_p' => getMedallistasData($conn, getMedallistasQuery('t_un_2014_p')),
                'medallistas_2015_uanl' => getMedallistasData($conn, getMedallistasQuery('t_un_2015_uanl')),
                'medallistas_2016_uanl' => getMedallistasData($conn, getMedallistasQuery('t_un_2016_uanl')),
                'medallistas_2017_uanl' => getMedallistasData($conn, getMedallistasQuery('t_un_2017_uanl')),
                'medallistas_2018_uaem' => getMedallistasData($conn, getMedallistasQuery('t_un_2018_uaem')),
                'medallistas_2019_uady' => getMedallistasData($conn, getMedallistasQuery('t_un_2019_uady')),
                'medallistas_2021_gto' => getMedallistasData($conn, getMedallistasQuery('t_un_2021_gto')),
                'medallistas_2022_uacj' => getMedallistasData($conn, getMedallistasQuery('t_un_2022_uacj')),
                'medallistas_2023_unison' => getMedallistasData($conn, getMedallistasQuery('t_un_2023_unison')),
                'medallistas_2024_a' => getMedallistasData($conn, getMedallistasQuery('t_un_2024_a')),
            );

            devolverData(1, '', $medallistas_uaq);
            $conn->commit();
        } catch (PDOException $e) {
            if ($conn->inTransaction()) {
                $conn->rollBack();
            }

            $msg = "Ocurrió un error técnico: " . $e->getMessage();
            devolverJSON(0, $msg);
            return [];
        }
    } else {
        $msg = "Ocurrió un error con el servicio.";
        devolverJSON(0, $msg);
        return false;
    }
}

function getMedallistasQuery($table) {
    $allowed_tables = ['t_un_2001_v', 't_un_2002_bc', 't_un_2003_c', 't_un_2006_m', 't_un_2007_uanl', 't_un_2008_g', 't_un_2009_uaem', 't_un_2011_uamex', 
    't_un_2012_v', 't_un_2013_s', 't_un_2014_p', 't_un_2015_uanl', 't_un_2016_uanl', 't_un_2017_uanl', 't_un_2018_uaem', 't_un_2019_uady', 't_un_2021_gto', 
    't_un_2022_uacj', 't_un_2023_unison', 't_un_2024_a'];

    if (!in_array($table, $allowed_tables)) {
        $msg = "Ocurrió un error técnico";
        devolverJSON(0, $msg);
        return false;
    }

    $query_medallistas = "SELECT m.id, m.c_nombre, m.c_apellido_paterno, m.c_apellido_materno, m.c_tipo_medalla, m.c_url_foto, d.c_nombre AS nombre_deporte, cat.c_nombre AS nombre_categoria
        FROM medallistas_uaq.$table AS m
        JOIN medallistas_uaq.t_deportes AS d ON m.n_id_deporte = d.id
        LEFT JOIN medallistas_uaq.t_categoria_deporte AS cat ON m.n_id_categoria = cat.id";

    return $query_medallistas;
}

function getMedallistasData($conn, $query) {
    try {
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() < 1) {           
            devolverJSON(0, "No se encontraron datos");
            return [];
        }

        $medallistas_uaq = [];            
        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            $medallistas_uaq[] = array(
                'id' => $row->id,
                'c_nombre' => $row->c_nombre,
                'c_apellido_paterno' => $row->c_apellido_paterno,
                'c_apellido_materno' => $row->c_apellido_materno,
                'c_nombre_deporte' => $row->nombre_deporte,
                'c_tipo_medalla' => $row->c_tipo_medalla,
                'c_nombre_categoria' => $row->nombre_categoria,
                'c_url_foto' => stripslashes($row->c_url_foto)
            );
        }

        $stmt->closeCursor();
        return $medallistas_uaq;
    } catch(PDOException $e) {
        $msg = "Ocurrió un error al obtener los datos" . $e->getMessage();
        devolverJSON(0, $msg);
        return [];
    }
}
?>