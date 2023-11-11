<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $f_name = $_POST['F_Name'];
    $l_name = $_POST['L_Name'];
    $email = $_POST['Email'];
    $email2 = $_POST['Email2'];
    $profesi = $_POST['Profesi'];

    $newData = "$id,$f_name,$l_name,$email,$email2,$profesi\n";
    $csvFilePath = 'datapribadi.csv';
    file_put_contents($csvFilePath, $newData, FILE_APPEND);
}
?>