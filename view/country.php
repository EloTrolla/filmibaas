<?php
require 'controller/country.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">
    <title><?php echo $data['info'] ? "Country: " . $data['info']['name'] : "Country not found" ?></title>
</head>
<body>
<div class="wrapper container-fluid">
    <?php include 'static/templates/header.php'; ?>
    <div class="main-content row">
        <?php if ($data['info']): ?>
            <h1><?= $data['info']['name'] ?></h1>

            <div class="entity-list col-md-6">
                <h2>Authors</h2>
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
                <h2>Films</h2>
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
            <h1>Nothing found</h1>
            <p>We couldn't find a country with this ID.</p>
        <?php endif ?>

    </div>
    <?php include 'static/templates/footer.php'; ?>
</div>
</body>
