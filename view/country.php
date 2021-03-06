<?php
require 'controller/country.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">
    <title><?php echo $data['info'] ? "Country: " . $data['info']['name'] : "Riiki ei leitud" ?></title>
</head>
<body>
<?php if(isset($_GET['id']) && $_GET['id'] > 10) {
    echo 'Riiki ei leitud';
    return false;
} ?>
<?php include 'static/templates/header.php'; ?>
<div class="wrapper container-fluid">

    <div class="main-content row">
        <?php if ($data['info']): ?>
            <h1><?= $data['info']['name'] ?></h1>

            <div class="entity-list col-md-6">
                <h2>Autorid</h2>
                <?php
                if ($data['authors']) {
                    foreach ($data['authors'] as $author) {
                        echo '<a href="author.php?id=' . $author['author_id'] . '">'
                            . $author['name'] . ' (' . $author['begin_date_year'] . '-' . $author['end_date_year'] . ')</a><br>';
                    }
                } else {
                    echo "<p>We couldn't find any authors from this country.</p>";
                }
                ?>
            </div>

            <div class="entity-list col-md-6">
                <h2>Filmid</h2>
                <?php
                if ($data['films']) {
                    foreach ($data['films'] as $film) {
                        echo '<a href="film.php?id=' . $film['film_id'] . '">'
                            . $film['name'] . ' (' . $film['year'] . ')</a><br>';
                    }
                } else {
                    echo "<p>We couldn't find any films from this country.</p>";
                }
                ?>
            </div>
        <?php else: ?>
            <h1>Riiki ei leitud</h1>
            <p>Sellise ID-ga riiki ei ole meil olemas.</p>
        <?php endif ?>

    </div>

</div>
<?php include 'static/templates/footer.php'; ?>
</body>
