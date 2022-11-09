<?php
// CALCOrtsliste.csv

$file = fopen('../csv/CALCOrtsliste.csv', 'r');
$allValues = array();
while (($line = fgetcsv($file)) !== FALSE) {
    //$line is an array of the csv elements
    if($line[0] != "" && $line[1] != ""){
        array_push($allValues, $line);
    }
}
fclose($file);
echo json_encode($allValues);
