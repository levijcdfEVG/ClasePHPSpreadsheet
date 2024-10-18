<?php

//Fuente: https://phpspreadsheet.readthedocs.io/en/latest/

//Dependencias de la página
require '../vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//Validacion de si el fichero existe. Fuente: https://www.php.net/manual/en/function.file-exists.php
if (!file_exists('datosAlumnos.xlsx')) {
    //Creamos el objeto de hoja de calculo
    $hojaDeCalculo = new Spreadsheet();
    $activeWorksheet = $hojaDeCalculo->getActiveSheet();

    //Creamos un array con los alumnos de DAW
    $alumnos = array(
        1 => 'Arias Carroza, Javier',
        2 => 'Caldito Gómez, Pablo',
        3 => 'Candeias De Figueiredo, Leví Josué',
        4 => 'Del Valle Del Pino, José Luis',
        5 => 'Fariña Morena, David',
        6 => 'Gómez Delgado, Álvaro',
        7 => 'González Bernáldez, Fernando José',
        8 => 'Guiberteau Franco, Ángel',
        9 => 'Hernández Sánchez, Paloma',
        10 => 'López Vega, Míriam',
        11 => 'Martín Llera, Ceus',
        12 => 'Moruno Herrojo, Celia',
        13 => 'Paz Bernal, Ismael',
        14  => 'Peña Domínguez, Mauricio',
        15 => 'Rodríguez Botello, Carlos',
        16 => 'Sánchez Díaz, Alberto',
        17 => 'Sánchez Gallardo, Hugo',
        18 => 'Silva Vega, David',
        19 => 'Telo Núñez, Joaquín Francisco',
        20 => 'Vidigal Barroso, María'
    );

    //Recorremos el array e imprimimos los datos en la hoja de calculo
    foreach ($alumnos as $key => $value) {
        $activeWorksheet->setCellValue('A'.$key, $key);
        $activeWorksheet->setCellValue('B'.$key, $value);
    }


    //Crear el objeto que va a escribir la hoja de calculo
    $writer = new Xlsx($hojaDeCalculo);
    $writer->save('datosAlumnos.xlsx');
}else {
    echo "El fichero ya existe";
}
