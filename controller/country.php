<?php

//Connect to database
$db = mysqli_connect('127.0.0.1', 'root', '', 'filmibaas') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

//Retrieve country data from database
$q = mysqli_query($db, "SELECT *
                         FROM country
                         WHERE country_id=4");
$country = mysqli_fetch_assoc($q);

$q = mysqli_query($db, "SELECT *, country.name as country, film.name as film
                         FROM country
                          JOIN film on country.country_id = film.country_id
                         WHERE country.country_id=4");
while ($row = mysqli_fetch_assoc($q)) {
    $films[] = $row;
}

$q = mysqli_query($db, "SELECT *, country.name as country, author.name as name
                         FROM country
                          JOIN author on country.country_id = author.country_id
                         WHERE country.country_id=1");
while ($row = mysqli_fetch_assoc($q)) {
    $authors[] = $row;
}

$data['authors'] = $authors;
$data['films'] = $films;
$data['info'] = $country;