<?php
$author_id = !empty($_GET['id']) ? $_GET['id'] : 2;


//Retrieve author data from database
$author = get_first("SELECT *, author.name as name, country.name as country,
                              gender.name as gender
                         FROM author
                         JOIN country on author.country_id = country.country_id
                         JOIN gender on author.gender_id = gender.gender_id
                         WHERE author_id=$author_id");

//Retrieve all relationships for the author from database
$relationships = get_all("SELECT link_type.name as type, film.name as film
                            FROM l_author_film
                            JOIN film ON film.film_id = l_author_film.film_id
                            JOIN link_type ON link_type.type_id = l_author_film.type_id
                            WHERE author_id=$author_id");
?>