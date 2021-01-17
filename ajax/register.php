<?php
    define('__CONFIG__', true);
    require_once("../inc/config.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-Type: application/json');
    } else {
        exit('TEST');
    }

    $array = ['test', 'test2', 'test3'];
    echo json_encode($array, JSON_PRETTY_PRINT);
?>
