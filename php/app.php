<?php
$data = $_POST['coverted_text'];
$filename = $_POST['filename'];
$path = '../' . $filename;
// echo $path;

$fp = fopen($path, 'w');

foreach($data as $line){
    $encoded_text = array();

$val = explode("_", $line);

for ($i=0; $i < count($val); $i++) { 
    array_push($encoded_text, iconv("UTF-8", "ISO-8859-1//TRANSLIT", $val[$i]));
 }

fputcsv($fp, $encoded_text);

}

fclose($fp);
print_r($encoded_text);

?>