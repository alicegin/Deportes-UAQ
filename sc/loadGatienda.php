<?php
require_once '../assets/spout-master/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

$filePath = '../assets/db/gatienda_uaq.xlsx';

$reader = ReaderEntityFactory::createXLSXReader();
$reader->open($filePath);

$response = [];
$responseData = [];

$sheets = iterator_to_array($reader->getSheetIterator());

foreach ($sheets as $sheet) {
    $sheetName = $sheet->getName();
    $sheetData = [];
    $headers = [];

    foreach($sheet->getRowIterator() as $rowIndex => $row) {
        $cells = $row->getCells();
        $rowData = [];

        foreach ($cells as $cell) {
            $rowData[] = $cell->getValue();
        }

        if ($rowIndex === 1) {
            $headers = $rowData;
        } else {
            if (count($headers) === count($rowData)) {
                $response['success'] = 1;

                $data = array_combine($headers, $rowData);

                if (isset($data['id'])) {                   
                    $encodedId = base64_encode($data['id']);
                    $data['id'] = $encodedId;
                }
                if (isset($data['tallas']) && strpos($data['tallas'], ',') !== false) {
                    $data['tallas'] = array_map('trim', explode(',', $data['tallas']));
                }
                if (isset($data['colores']) && strpos($data['colores'], ',') !== false) {
                    $colores = array_map('trim', explode(',', $data['colores']));
                    $data['colores'] = array_map('textToHexColor', $colores);
                }

                $sheetData[] = $data;
            } else {
                $response['success'] = 0;
                $response['data'] = [];
            }
        }
    }

    $responseData[$sheetName] = $sheetData;
}

if ($response['success'] != 0) {
    $response['msg'] = 'Datos cargados correctamente';
    $response['data'] = $responseData;
} else {
    $response['msg'] = 'Error al cargar los datos';
}

$reader->close();

header('Content-Type: application/json');

$response = json_encode($response, JSON_PRETTY_PRINT);
echo $response;

function textToHexColor($colorName) {
    $colorMap = [
        'azul' => '#0000FF',
        'negro' => '#000000',
        'gris' => '#808080',
        'blanco' => '#FFFFFF',
        'rojo' => '#FF0000',
        'verde' => '#008000',
        'amarillo' => '#FFFF00',
        'rosa' => '#FFC0CB',
        'plata' => '#C0C0C0'       
    ];

    $colorName = strtolower(trim($colorName));

    return $colorMap[$colorName] ?? '#000000';
}
?>