<?php
$apikey = '3NFQG1rBJdRby444GjFBaRWRK';
$amount = 99.89;
$description = 'Koopa filmist';

function get_banklink($apikey, $amount, $description)
{
    $url = 'http://pseudobank.esy.es/API/';
    $data = array('apikey' => $apikey, 'amount' => $amount, 'description' => $description);

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context = stream_context_create($options);
    $json = file_get_contents($url, false, $context);

    $search_results = json_decode($json, TRUE);
    if ($search_results === NULL)
        die('json query error!');

    return $search_results['banklink'];
}

$link = get_banklink($apikey, $amount, $description);
echo " <input class=\"btn\" type=\"button\" value=\"Edasi!\" onClick=\"location.href='http://pseudobank.esy.es/BANKLINK/?link=ScNWWKXyg9FBeVEyju1Pj2GIIzHPOaUGnIDjtATKJznZv2yOwAEPCmzmWhcK'\">";

/*<div style='text-align: center;
height: 50%;
padding: 15px;
        position: relative;
        '> */
?>
<html>
<link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">
</html>