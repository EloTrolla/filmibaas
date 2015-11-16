<?php
require 'controller/country.php';
?>

<h1> <?= $data['info']['name'] ?></h1>
<div class="entity-list">
    <h2>Authors</h2>
    <?php
    foreach ($data['authors'] as $author) {
        echo '<a href="author.php?id=' . $author['author_id'] . '">'
            . $author['name'] . ' (' . $author['begin_date_year'] . '-' . $author['end_date_year'] . ')</a><br>';
    }
    ?>
</div>

<div class="entity-list">
    <h2>Films</h2>
    <?php
    foreach ($data['films'] as $film) {
        echo '<a href="film.php?id=' . $film['film_id'] . '">'
            . $film['name'] . ' (' . $film['year'] . ')</a><br>';
    }
    ?>
</div>