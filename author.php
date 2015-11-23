<?php
//require 'controller/author.php';

//print_r($author);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title>Author: Name</title>
</head>
<body class="entitypage-body">

<div class="wrapper container-fluid">
    <?php include 'static/templates/header.php'; ?>
    <div class="main-content row">
        <div class="col-md-4">
            <h2>Grigori Kromanov</h2>

            <p class="andmed">1926-1984</p>

            <p class="andmed">Sugu: Mees</p>

            <p class="andmed">Riik: Nõukogude Liit</p>

            <div class="entity-list">
                <h2>Filmograafia</h2>

                <p><a href="">Filmi Pealkiri</a></p>

                <p><a href="">Filmi Pealkiri</a></p>

                <p><a href="">Filmi Pealkiri</a></p>

                <p><a href="">Filmi Pealkiri</a></p>

                <p><a href="">Filmi Pealkiri</a></p>

                <p><a href="">Filmi Pealkiri</a></p>

                <p><a href="">Filmi Pealkiri</a></p>

                <p><a href="">Filmi Pealkiri</a></p>
            </div>
        </div>
        <div class="col-md-8">
            <img class="author-image" src="http://gulliver.kand.pri.ee/kromanov.jpg">

            <p id="tutvustus">
                <wbr/>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus velit sit amet felis dapibus
                scelerisque.
                Vivamus non ante in nibh faucibus consectetur. Praesent tincidunt leo enim, sed suscipit elit auctor eu.
                Proin
                sit amet malesuada ex. Aenean eget consequat leo. Mauris ullamcorper diam ut quam ultrices tincidunt.
                Vestibulum
                efficitur, elit ut scelerisque luctus, elit dolor posuere tortor, vitae volutpat purus velit vel leo.
                Proin nec
                nisi bibendum, sollicitudin urna euismod, sagittis neque.
            </p>
        </div>
    </div>


    <?php include 'static/templates/footer.php'; ?>
</div>
</body>
</html>