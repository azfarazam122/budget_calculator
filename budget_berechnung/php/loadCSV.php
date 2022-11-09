<?php
// BudgetLevels.csv

$file = fopen('../csv/BudgetLevels.csv', 'r');
$jobTypeGerman = array();
// $jobTypeEnglish = array();
$allValues = array();
while (($line = fgetcsv($file)) !== FALSE) {
    //$line is an array of the csv elements

    array_push($allValues, $line);
    array_push($jobTypeGerman, $line[0]);
    // array_push($jobTypeEnglish, $line[1]);
}
$jobTypeGerman = array_slice($jobTypeGerman, 5, count($jobTypeGerman));
// $jobTypeEnglish = array_slice($jobTypeEnglish, 5, count($jobTypeEnglish));
$temp = array($jobTypeGerman, $allValues);
fclose($file);
echo json_encode($temp);
