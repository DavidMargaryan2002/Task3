<?php

class ControllerImage {

    public function uploadImage()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
            $targetDir = 'images/';

            $fileName = basename($_FILES['image']['name']);
            $targetFilePath = $targetDir . $fileName;
            $name = $fileName;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                $sourcePath = "images/$fileName";

                $sourceImage = imagecreatefromjpeg($sourcePath);

                $newWidth = $_POST['width'];
                $newHeight = $_POST['height'];

                $newImage = imagecreatetruecolor($newWidth, $newHeight);

                imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, imagesx($sourceImage), imagesy($sourceImage));

                $destinationFolder = 'photo/';

                $newImageName = $_POST['name'].'.jpg';
                $newName = $newImageName;

                $newImagePath = $destinationFolder . $newImageName;

                imagejpeg($newImage, $newImagePath);

                imagedestroy($sourceImage);
                imagedestroy($newImage);
                include 'View/add.php';
                include 'View/View.php';
                exit;
            }
        }
    }

    public function getPhoto()
    {
        include 'View/add.php';
    }
}


