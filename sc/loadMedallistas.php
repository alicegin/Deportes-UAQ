<?php 
/**
 * Requiere la librería Spout para la lectura de archivos Excel.
 */
require_once '../assets/spout-master/src/Spout/Autoloader/autoload.php';

/**
 * Usa el espacio de nombres de Spout para crear el lector de archivos Excel.
 */
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

// Ruta del archivo Excel
$filePath = '../assets/db/medallistas_uaq.xlsx';

/**
 * Crea un lector para el archivo Excel y abre el archivo para lectura.
 */
$reader = ReaderEntityFactory::createXLSXReader();
$reader->open($filePath);

// Inicialización de la respuesta
$response = [];
$responseData = [];

/**
 * Obtiene las hojas del archivo Excel como un arreglo.
 * Se invierte el orden de las hojas antes de procesarlas.
 */
$sheets = iterator_to_array($reader->getSheetIterator());

foreach (array_reverse($sheets) as $sheet) {
    $sheetName = $sheet->getName(); // Nombre de la hoja
    $sheetData = [];
    $headers = [];

    /**
     * Itera sobre las filas de la hoja para extraer los datos.
     */
    foreach ($sheet->getRowIterator() as $rowIndex => $row) {
        $cells = $row->getCells();
        $rowData = [];

        // Extrae los valores de cada celda en la fila
        foreach ($cells as $cell) {
            $rowData[] = $cell->getValue();               
        }

        /**
         * La primera fila se usa como encabezados.
         * Las siguientes filas se combinan con los encabezados para obtener los datos.
         */
        if ($rowIndex === 1) {           
            $headers = $rowData;            
        } else {
            if (count($headers) === count($rowData)) {
                $response['success'] = 1;
                
                // Combina los encabezados con los valores de la fila
                $data = array_combine($headers, $rowData);
                $sheetData[] = $data;
            } else {
                $response['success'] = 0;
                $response['data'] = []; 
            }
        }
    }

    // Almacena los datos procesados para cada hoja
    $responseData[$sheetName] = $sheetData;
}

/**
 * Si se encontraron datos válidos, se envía una respuesta de éxito.
 * Si no, se envía un mensaje de error.
 */
if ($response['success'] != 0) {
    $response['msg'] = 'Datos cargados correctamente';
    $response['data'] =  $responseData;
} else {
    $response['msg'] = 'Error al cargar los datos';
}

/**
 * Cierra el lector del archivo Excel.
 */
$reader->close();

/**
 * Establece el tipo de contenido como JSON y envía la respuesta en formato JSON.
 */
header('Content-Type: application/json');
$response = json_encode($response, JSON_PRETTY_PRINT);
echo $response;
?>
