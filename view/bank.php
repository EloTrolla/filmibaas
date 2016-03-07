<?php
session_start();
$apikey = '3NFQG1rBJdRby444GjFBaRWRK';
$amount = 9.89;
$description = 'Koopia filmist';

function get_banklink($apikey, $amount, $description)
{
    $url = 'http://pseudobank.esy.es/API/';
    $data = array(
        'apikey' => $apikey,
        'amount' => $amount,
        'description' => $description);

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

?>


<a href="<?= $link ?>"> <input class="btn" type="button" value="Maksa">
</a>
<p> <?php echo 'Summa kokku: '.$amount; ?></p>
<link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">
