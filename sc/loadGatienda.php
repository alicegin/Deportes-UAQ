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
$filePath = '../assets/db/gatienda_uaq.xlsx';

/**
 * Verifica si el archivo existe en la ruta especificada.
 * Si no existe, se retorna un mensaje de error en formato JSON.
 */
if (!file_exists($filePath)) {
    $response = [
        'success' => 0,
        'data' => [],
        'msg' => 'Archivo no encontrado'
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    exit;
}

/**
 * Crea un lector para el archivo Excel y abre el archivo para lectura.
 */
$reader = ReaderEntityFactory::createXLSXReader();
$reader->open($filePath);

// Inicialización de la respuesta
$response = ['success' => 1, 'data' => []];
$responseData = [];

/**
 * Obtiene las hojas del archivo Excel como un arreglo.
 * Si no hay hojas, se retorna un mensaje de error.
 */
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

/**
 * Itera sobre cada hoja en el archivo Excel.
 * Para cada hoja, se extraen los datos y se procesan.
 */
foreach ($sheets as $sheet) {
    $sheetName = $sheet->getName(); // Nombre de la hoja
    $sheetData = []; // Datos de la hoja
    $headers = []; // Encabezados de la hoja

    /**
     * Itera sobre las filas de la hoja.
     * Se extraen los valores de las celdas y se procesan.
     */
    foreach ($sheet->getRowIterator() as $rowIndex => $row) {
        $cells = $row->getCells();
        $rowData = array_map(fn($cell) => $cell->getValue(), $cells);

        if (empty($rowData)) {
            continue; // Si la fila está vacía, se salta
        }

        /**
         * La primera fila se usa como encabezados.
         * Las filas siguientes se combinan con los encabezados para obtener los datos.
         */
        if ($rowIndex === 1) {
            $headers = $rowData; // Se asignan los encabezados
        } else {
            if (count($headers) === count($rowData)) {
                $data = array_combine($headers, $rowData); // Combina encabezados con datos

                /**
                 * Procesamiento de campos específicos: 'id', 'tallas', y 'colores'.
                 */
                if (isset($data['id'])) {
                    $data['id'] = base64_encode($data['id']); // Encripta el id
                }
                if (isset($data['tallas']) && strpos($data['tallas'], ',') !== false) {
                    $data['tallas'] = array_map('trim', explode(',', $data['tallas'])); // Procesa las tallas
                }
                if (isset($data['colores']) && !empty($data['colores'])) {
                    if (strpos($data['colores'], ',') !== false) {
                        $colores = array_map('trim', explode(',', $data['colores']));
                        $data['colores'] = array_map('textToHexColor', $colores); // Convierte los colores a formato hexadecimal
                    } else {
                        $data['colores'] = textToHexColor(trim($data['colores'])); // Convierte un solo color a formato hexadecimal
                    }
                } else {
                    $data['colores'] = '#000000'; // Valor por defecto si no hay colores
                }

                $sheetData[] = $data; // Agrega los datos procesados
            }
        }
    }

    // Almacena los datos procesados para cada hoja
    $responseData[$sheetName] = $sheetData;
}

/**
 * Si se encontraron datos válidos, se envía la respuesta con los datos procesados.
 * Si no, se envía un mensaje de error.
 */
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

/**
 * Cierra el lector del archivo Excel.
 */
$reader->close();

/**
 * Establece el tipo de contenido como JSON y envía la respuesta en formato JSON.
 */
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);

/**
 * Convierte un nombre de color (en español) a su valor hexadecimal correspondiente.
 * 
 * @param {string} $colorName - El nombre del color en español.
 * @returns {string} El valor hexadecimal correspondiente al color.
 */
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

    return $colorMap[strtolower(trim($colorName))] ?? '#000000'; // Devuelve el valor hexadecimal o negro si no se encuentra el color
}
?>
