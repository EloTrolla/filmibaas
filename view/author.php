<?php
require 'controller/author.php';

//print_r($author);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <title>Autor: <?php echo $author['name']; ?></title>
</head>

<body class="entitypage-body">
<?php include 'static/templates/header.php'; ?>

<div class="wrapper container-fluid">

    <div class="main-content row">
        <div class="col-md-4">
            <?php if (isset($_GET['id']) && $_GET['id'] > 3) {
                echo 'Autorit ei leitud';
                return false;
            } ?>

            <h2><?= $author['name']; ?></h2>

            <p class="andmed"><?= $author['begin_date_year']; ?>/<?= $author['begin_date_month']; ?>
                /<?= $author['begin_date_day']; ?> - <?= $author['end_date_year']; ?>/<?= $author['end_date_month']; ?>
                /<?= $author['end_date_day']; ?></p>

            <p class="andmed">Sugu: <?= $author['gender']; ?></p>

            <p class="andmed">Riik: <?= $author['country']; ?></p>

            <div class="entity-list">
                <h2>Filmograafia</h2>

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
</div>
<?php include 'static/templates/footer.php'; ?>
</body>
</html>
