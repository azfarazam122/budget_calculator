<?php
// SalesData.csv

$file = fopen('../csv/SalesData.csv', 'r');
$allValues = array();
while (($line = fgetcsv($file)) !== FALSE) {
    //$line is an array of the csv elements
    array_push($allValues, $line);
}
fclose($file);
echo json_encode($allValues);
