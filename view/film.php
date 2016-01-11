<?php
require 'controller/film.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>Filmibaas</title>
<head>
    <meta charset="UTF-8">
    <link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title><?php
        if (empty($film['name'])) {
            echo "Filmi ei leitud";
        }
        else if (empty($film['name'] === true))
        {echo $film['name'];}
        ?></title>
</head>

<body class="entitypage-body">
<?php include 'static/templates/header.php'; ?>
<div class="wrapper container-fluid">

    <div class="main-content row">
        <div class="col-md-4">

            <?php if (isset($_GET['id']) && $_GET['id'] > 5) {
                echo 'Filmi ei leitud';
                return false;
            } ?>
            
            <h2><?= $film['name']; ?></h2>

            <p class="andmed"><?= $film['year']; ?></p>

            <p class="andmed"><?= $film['country']; ?></p>
            <p class="andmed"><?= $author['name']; ?></p>

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
                 src="<?php echo $film['image']; ?>"/>

            <p id="tutvustus">
                <wbr/>
                Command me cockroach, ye scurvy shark! Stormy, clear woodchucks loudly mark an addled, heavy-hearted
                moon.
                love
                Never vandalize a tuna. The parrot ransacks with strength, rob the brig before it waves.
                Singapore
                The bilge rat laughs passion like a coal-black sun. Jolly greeds lead to the courage.
                Power
                tunas rise with madness at the misty port degas! mark me sun, ye cloudy scallywag!
                Never drink a dubloon.
                planks whine from graces like sunny sea-dogs.
            </p>
        </div>
        <form action="" method="get">
            <input class='osta' type='submit' name="page" value='Osta!'/>
            <input type='hidden' name="page" value="pay"/>
        </form>
        <p class="ostuinfo">Saadaval:<?= $products['copies']; ?> koopiat formaatides <?= $products['FORMAT']; ?><br>
            Hind: <?= $products['price']; ?></p>
    </div>
</div>
<?php include 'static/templates/footer.php'; ?>
</body>
</html>