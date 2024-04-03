<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Upload Image</title>
</head>
<body>
<h2>նկարների չափսերի փոփոխման դաշտ</h2>
<form action="index.php?action=add" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="text" name="name" placeholder="Նկարի անուն">
    <input type="number" name="width" placeholder="Լայնություն">
    <input type="number" name="height" placeholder="Երկարություն">
    <button type="submit" name="submit">Կատարել</button>
</form>
<?php include 'View.php'?>
</body>
</html>
