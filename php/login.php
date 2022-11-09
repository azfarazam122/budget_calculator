<?php
session_start();
$username = $_POST['user_name'];
$password = $_POST['pass_word'];

$row = 1;
$myData = [];
if (($handle = fopen("credential.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
            $myData[$c] = $data[$c];   
            
        }
    }
    fclose($handle);
}


if ($username == $myData[0] && $password == $myData[1]) {
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    echo 'success';
}
else if ($username == "" || $password == '') {
    echo 'empty';
}
else
{
    $_SESSION["username"] = '';
    $_SESSION["password"] = '';
    echo 'fail';
}



?>