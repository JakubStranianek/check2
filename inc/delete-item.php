<?php

require_once 'config.php';

if (isset($database)) {
    $deleted = $database->delete("stud", [
        'id' => $_POST['id']
    ]);
}

if ($deleted) {
    header('Location: /check2');
    die();
}