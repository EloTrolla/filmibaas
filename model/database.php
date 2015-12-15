<?php
require 'config.php';
//Connect to database
$db = mysqli_connect(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_DATABASE) or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

/**
 * Executes the SQL and returns the all the rows as a 2-dimensional array.
 * @param $sql
 * @return array
 */
function get_all($sql)
{
    global $db;
    $result = array();
    $query_result = mysqli_query($db, $sql) or exit(mysqli_error($db));
    while ($row = mysqli_fetch_assoc($query_result)) {
        $result[] = $row;
    }

    return $result;
}

function get_first($sql)
{
    global $db;
    $query_result = mysqli_query($db, $sql) or exit(mysqli_error($db));
    $result = mysqli_fetch_assoc($query_result);

    return empty($result) ? array() : $result;
}
