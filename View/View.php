<?php include 'Controller/controlImage.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Display</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
<div class="image-container">
    <div class="image-wrapper">
        <h1>Բնօրինակ</h1>
        <img src="images/<?= $_SESSION['name'] ?>" alt="Image 1">
    </div>
    <div class="image-wrapper">
        <h1>Փոփոխված</h1>
        <img src="photo/<?= $_SESSION['newname']?>" alt="Image 2">
    </div>
</div>
</body>
</html>
