<?php
$country_id = !empty($_GET['id']) ? $_GET['id'] : 1;

//Connect to database
$db = mysqli_connect('127.0.0.1', 'root', '', 'filmibaas') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

//Retrieve country data from database
$q = mysqli_query($db, "SELECT *
                         FROM country
                         WHERE country_id=$country_id");
$country = mysqli_fetch_assoc($q);

$q = mysqli_query($db, "SELECT *, country.name as country, film.name as film
                         FROM country
                          JOIN film on country.country_id = film.country_id
                         WHERE country.country_id=$country_id");
while ($row = mysqli_fetch_assoc($q)) {
    $films[] = $row;
}

$q = mysqli_query($db, "SELECT *, country.name as country, author.name as name
                         FROM country
                          JOIN author on country.country_id = author.country_id
                         WHERE country.country_id=$country_id");
while ($row = mysqli_fetch_assoc($q)) {
    $authors[] = $row;
}


$data['authors'] = !empty($authors) ? $authors : null;
$data['films'] = !empty($films) ? $films : null;
$data['info'] = !empty($country) ? $country : null;