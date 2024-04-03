<?php
session_start();
include 'Controller/ControllerImage.php';
$action = $_GET['action'] ?? null;
    switch ($action) {
        case 'add':
            $controller = new ControllerImage();
            $controller->uploadImage();
        default:
            $controller = new ControllerImage();
            $controller->getPhoto();
    }

