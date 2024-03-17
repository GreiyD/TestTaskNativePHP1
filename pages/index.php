<?php session_start();
    require_once '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление наценки для предзаказа</title>
</head>
<body>
<h1>Оформление наценки для предзаказа</h1>
    <?php require_once 'form.php'; ?>
<hr>
<div>
    <?php require_once 'infoProduct.php'; ?>
</div>
</body>
</html>