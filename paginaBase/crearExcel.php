<?php

//Fuente: https://phpspreadsheet.readthedocs.io/en/latest/


require '/vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;


//Creamos el objeto de hoja de calculo
$hojaDeCalculo = new Spreadsheet();
$activeWorksheet = $hojaDeCalculo->getActiveSheet();
for ($i=1; $i <= 10; $i++) { 
    $activeWorksheet->setCellValue('A'.$i, '¡Hola mundo!');
}


//Crear el objeto que va a escribir la hoja de calculo
$writer = new Xlsx($spreadsheet);
$writer->save('holaMundo.xlsx');