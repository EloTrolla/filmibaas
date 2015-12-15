<?php
require $_SERVER['DOCUMENT_ROOT'].'/filmibaas/controller/search.php';
print_r($result);
?>

<?php if (count($result) == 0): ?>
    <p>We didn't find anything. You hipster. Search for something more normal.</p>
<?php elseif ($_GET["searchdrop"] == 'Film') : ?>
    <table>
        <thead>
        <tr>
            <td><b>Pealkiri</b></td>
            <td><b>Aasta</b></td>
            <td><b>Riik</b></td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><a href="/filmibaas/?page=film&id=<?php echo $row['film_id'] ?>"><?php echo $row['name'] ?></a></td>
                <td><?php echo $row['year'] ?></td>
                <td><?php echo $row['country'] ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php elseif ($_GET["searchdrop"] == 'Autor') : ?>
    <table>
        <thead>
        <>
            <td><b>Autor</b></td>
            <td><b>Sünniaasta</b></td>
            <td><b>Surmaaasta</b></td>
            <td><b>Riik</b></td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><a href="/filmibaas/?page=author&id=<?php echo $row['author_id'] ?>"><?php echo $row['name'] ?></td>
                <td><?php echo $row['begin_date_year'] ?></td>
                <td><?php echo $row['end_date_year'] ?></td>
                <td><?php echo $row['country'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php elseif ($_GET["searchdrop"] == 'Riik') : ?>
    <table>
        <thead>
        <tr>
            <td><b>Riik</b></td></tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><a href="/filmibaas/?page=country&id=<?php echo $row['country_id'] ?>"><?php echo $row['name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>




<?php endif; ?>
