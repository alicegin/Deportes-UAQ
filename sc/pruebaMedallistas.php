<?php 
require_once '../assets/spout-master/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

$filePath = '../assets/db/medallistas_uaq.xlsx';

$reader = ReaderEntityFactory::createXLSXReader();
$reader->open($filePath);

$response = [];
$responseData = [];

// Guardar las hojas en un array
$sheets = iterator_to_array($reader->getSheetIterator());

foreach (array_reverse($sheets) as $sheet) {
    $sheetName = $sheet->getName();
    $sheetData = [];
    $headers = [];

    foreach ($sheet->getRowIterator() as $rowIndex => $row) {
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
    $response['data'] =  $responseData;
} else {
    $response['msg'] = 'Error al cargar los datos';
}

$reader->close();

header('Content-Type: application/json');

$response = json_encode($response, JSON_PRETTY_PRINT);
echo $response;
?>
