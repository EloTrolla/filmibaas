<?php
$author_id = !empty($_GET['id']) ? $_GET['id'] : 1;
//Connect to database
$db = mysqli_connect('127.0.0.1', 'root', '', 'filmibaas') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

//Retrieve author data from database
$q = mysqli_query($db, "SELECT *, author.name as name, country.name as country,
                              gender.name as gender
                         FROM author
                          JOIN country on author.country_id = country.country_id
                          JOIN gender on author.gender_id = gender.gender_id
                         WHERE author_id=$author_id");
$author = mysqli_fetch_assoc($q);

//Retrieve all relationships for the author from database
$qrel = mysqli_query($db, "SELECT link_type.name as type, film.name as film
                            FROM l_author_film
                            JOIN film ON film.film_id = l_author_film.film_id
                            JOIN link_type ON link_type.type_id = l_author_film.type_id
                            WHERE author_id=$author_id");
while ($row = mysqli_fetch_assoc($qrel)) {
    $relationships[] = $row;
}

?>