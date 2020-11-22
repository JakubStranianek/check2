<?php

require_once 'config.php';

if (isset($database)) {
    $id = $database->insert("stud", [
        "Name" => $_POST['messageN'],
        "Surname" => $_POST['messageS']
    ]);
}

if ($id) {
    header('Location: /check2');
    die();
}