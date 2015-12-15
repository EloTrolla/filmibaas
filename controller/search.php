<?php
require "../model/database.php";

//kontrolli vastust

//if( $_GET["mainsearch"] || $_GET["searchdrop"] )
//{
  //  echo $_GET['mainsearch']. "<br />";
//    echo $_GET['searchdrop'];

//    exit();
//}

//test
if (!empty($_GET["mainsearch"]))
{
    $mainsearch = $_GET["mainsearch"];
    $searchdrop = $_GET["searchdrop"];




//Connect to database
$db = mysqli_connect('127.0.0.1', 'root', '', 'filmibaas') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

//otsing
if ($_GET["searchdrop"] == 'Film')
{
$result = get_all("SELECT *, film.name as name, country.name as country
                   FROM film
                   JOIN country on film.country_id = country.country_id
                   WHERE film.name LIKE '%$mainsearch%'");
}

    if ($_GET["searchdrop"] == 'Autor')
    {
        $result = get_all("SELECT *, author.name as name, country.name as country
                   FROM author
                   JOIN country on author.country_id = country.country_id
                   WHERE author.name LIKE '%$mainsearch%'");
    }

    if ($_GET["searchdrop"] == 'Riik')
    {
        $result = get_all("SELECT *, country.name as name
                   FROM country
                   WHERE country.name LIKE '%$mainsearch%'");
    }
//test et array prindib
//öprint_r($film);
}
