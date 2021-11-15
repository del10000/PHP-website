<?php
require_once("Student.php");

// $student = new Student($_POST['name'],$_POST['age']);

$tab = file_get_contents('test.json');

if ($tab == false){
    $tab = [];
} else {
    $tab = json_decode($tab);
}

$tab[] = new Student($_POST['name'],$_POST['age']);

$myJSON = json_encode($tab);

file_put_contents('test.json', $myJSON);

var_dump($tab);

echo('OK');

header("Location: http://localhost/NWS");
die();