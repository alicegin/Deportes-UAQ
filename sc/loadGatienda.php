<?php
require_once '../assets/spout-master/src/Spout/Autoloader/autoload.php';
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

$filePath = '../assets/db/gatienda_uaq.xlsx';

if (!file_exists($filePath)) {
    $response = [
        'success' => 0,
        'data' => [],
        'msg' => 'Archivo no encontrado'
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    exit;
}

$reader = ReaderEntityFactory::createXLSXReader();
$reader->open($filePath);

$response = ['success' => 1, 'data' => []];
$responseData = [];

$sheets = iterator_to_array($reader->getSheetIterator());

if (empty($sheets)) {
    $response = [
        'success' => 0,
        'data' => [],
        'msg' => 'El archivo no contiene hojas válidas'
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    exit;
}

foreach ($sheets as $sheet) {
    $sheetName = $sheet->getName();
    $sheetData = [];
    $headers = [];

    foreach ($sheet->getRowIterator() as $rowIndex => $row) {
        $cells = $row->getCells();
        $rowData = array_map(fn($cell) => $cell->getValue(), $cells);

        if (empty($rowData)) {
            continue;
        }

        if ($rowIndex === 1) {
            $headers = $rowData;
        } else {
            if (count($headers) === count($rowData)) {
                $data = array_combine($headers, $rowData);

                if (isset($data['id'])) {
                    $data['id'] = base64_encode($data['id']);
                }
                if (isset($data['tallas']) && strpos($data['tallas'], ',') !== false) {
                    $data['tallas'] = array_map('trim', explode(',', $data['tallas']));
                }
                if (isset($data['colores']) && !empty($data['colores'])) {
                    if (strpos($data['colores'], ',') !== false) {
                        $colores = array_map('trim', explode(',', $data['colores']));
                        $data['colores'] = array_map('textToHexColor', $colores);
                    } else {
                        $data['colores'] = textToHexColor(trim($data['colores']));
                    }
                } else {
                    $data['colores'] = '#000000';
                }

                $sheetData[] = $data;
            }
        }
    }

    $responseData[$sheetName] = $sheetData;
}

if (!empty($responseData)) {
    $response['msg'] = 'Datos cargados correctamente';
    $response['data'] = $responseData;
} else {
    $response = [
        'success' => 0,
        'data' => [],
        'msg' => 'No se encontraron datos válidos'
    ];
}

$reader->close();

header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);

function textToHexColor($colorName) {
    $colorMap = [
        'azul' => '0000FF',
        'negro' => '000000',
        'gris' => '808080',
        'blanco' => 'FFFFFF',
        'rojo' => 'FF0000',
        'verde' => '008000',
        'amarillo' => 'FFFF00',
        'rosa' => 'FFC0CB',
        'plata' => 'C0C0C0',
        'naranja' => 'FFA500'
    ];

    return $colorMap[strtolower(trim($colorName))] ?? '#000000';
}
?>
