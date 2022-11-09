<?php 
   
$updatedPass = $_POST['update_Password'];

// echo $updatedPass;
$list = ['12' ,'45' ,'56'];
$file = fopen("credential.csv","w");
   
fputcsv($file, ['username' , 'password']); 
fputcsv($file, ['arif' , $updatedPass]); 
   
fclose($file);

echo 'success';