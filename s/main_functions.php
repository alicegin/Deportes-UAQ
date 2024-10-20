<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
setlocale(LC_MONETARY, 'es_MX');

function devolverJSON($estado, $error = null, $msg = null){ 
    $output['success'] = $estado;

    if ($error != null) {
        $output['error'] = $error;
    }

    if ($msg != null) {
        $output['msg'] = $msg;
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode( $output );

    return json_encode($output);
    // exit; die();
}

function devolverData($estado, $error = null, $data = null){
    $output['success'] = $estado;

    if ($error != null) {
        $output['error'] = $error;
    }

    if ($data != null) {
        $output['data'] = $data;
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode( $output );

    // exit; die();
}
?>