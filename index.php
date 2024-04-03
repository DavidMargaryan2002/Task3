<?php
include 'Controller/controlImage.php';
$controller = new Controller();

$controller->getPhoto();

if (isset($_GET['action'])) {

    switch ($_GET['action']) {
        case 'add':
            $controller->uploadImage();
            break;
    }
}

