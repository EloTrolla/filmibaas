<?php
require 'controller/film.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title>Film: <?php echo $film['name']; ?></title>
</head>

<body class="entitypage-body">
<?php include 'static/templates/header.php'; ?>
<div class="wrapper container-fluid">

    <div class="main-content row">
        <div class="col-md-4">

            <?php if($_GET['id'] > 5) {
                echo 'Filmi ei leitud';
                return false;
            } ?>
            
            <h2><?= $film['name']; ?></h2>

            <p class="andmed"><?= $film['year']; ?></p>

            <p class="andmed"><?= $film['country']; ?></p>

            <div class="entity-list">
                <h3>Osalejad</h3>

                <p><a href="">Osaleja</a></p>

                <p><a href="">Osaleja</a></p>

                <p><a href="">Osaleja</a></p>

                <p><a href="">Osaleja</a></p>

                <p><a href="">Osaleja</a></p>

                <p><a href="">Osaleja</a></p>

            </div>
        </div>
        <div class="col-md-8">
            <img class="film-image"
                 src="https://upload.wikimedia.org/wikipedia/en/thumb/6/6f/Viimne-reliikvia.jpg/220px-Viimne-reliikvia.jpg">

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
        <input class='osta' type='button' value='Osta!' onclick="window.location.href='?page=pay'"/>

        <p class="ostuinfo">Saadaval:<?= $products['copies']; ?> koopiat formaatides <?= $products['FORMAT']; ?><br>
            Hind: <?= $products['price']; ?></p>

    </div>
</div>
<?php include 'static/templates/footer.php'; ?>
</body>
</html>