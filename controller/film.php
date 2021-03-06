<?php
$film_id = !empty($_GET['id']) ? $_GET['id'] : 1;
//Connect to database
$db = mysqli_connect('127.0.0.1', 'root', '', 'filmibaas') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

//Retrieve film data from database
$film = get_first("SELECT *, film.name as name, country.name as country
                   FROM film
                   JOIN country on film.country_id = country.country_id
                   WHERE film_id=$film_id");

//Retrieve price and copies information from database
$products = get_first("SELECT*, FORMAT as format
                        FROM products
                        JOIN film on film.film_id = products.film_id
                        WHERE film.film_id = $film_id");

//Retrieve all relationships for the film from database
$relationships = get_all("SELECT link_type.name as type, author.name as author
                          FROM l_author_film
                          JOIN author ON author.author_id = l_author_film.author_id
                          JOIN link_type ON link_type.type_id = l_author_film.type_id
                          WHERE film_id=$film_id");

//Retrieve all genres for the film from database
$genres = get_all("SELECT genre.name as genre
                   FROM l_film_genre
                   JOIN film ON film.film_id = l_film_genre.film_id
                   JOIN genre ON genre.genre_id = l_film_genre.genre_id
                   WHERE film.film_id=$film_id");