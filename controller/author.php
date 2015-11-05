<?php

//Connect database
$db = mysqli_connect('127.0.0.1', 'root', '', 'filmibaas') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

//Retrieve data from database
$q = mysqli_query($db, "
                        SELECT author.name as name, country.name as country, gender.name as gender,
                                begin_date_year, end_date_year
                         FROM author
                          JOIN country on author.country_id = country.country_id
                          JOIN gender on author.gender_id = gender.gender_id

                         WHERE author_id=1");
$author = mysqli_fetch_assoc($q);
print_r($author);

//JOIN l_author_film on author.author_id = l_author_film.author_id
?>