<?php

require_once 'config.php';

if (isset($database)) {
    $affected = $database->update("stud", [
        "Name" => $_POST['messageN'],
        "Surname" => $_POST['messageS']
        ], [
            'id' => $_POST['id']
    ]);
}

if ($affected) {
    header('Location: /check2');
    die();
}