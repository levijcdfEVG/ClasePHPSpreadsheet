<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Cargar el archivo de Excel
$hojaCalculo = IOFactory::load('listaDAW.xlsx');

// Seleccionar la primera hoja de trabajo
$hojaTrabajo = $hojaCalculo->getActiveSheet();

// Definir un array para almacenar los datos de los estudiantes
$estudiantes = [];

// Recorrer las filas, comenzando desde la fila 2 para saltar la cabecera
foreach ($hojaTrabajo->getRowIterator(2) as $fila) { //El get row iterator es el numerito de la fila del excel
    $iteradorCelda = $fila->getCellIterator(); //El Cell iterator el el indice de la celda
    $iteradorCelda->setIterateOnlyExistingCells(false);

    //Creamos un array para los datos de estudiante
    $datosEstudiante = [];
    foreach ($iteradorCelda as $celda) {
        $datosEstudiante[] = $celda->getValue();
    }
    $estudiantes[] = $datosEstudiante;
}
