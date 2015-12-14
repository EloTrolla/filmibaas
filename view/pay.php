<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="static/style/stylesheet.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Maksmine</title>
</head>
<body class="mainpage-body">
<style>
    .andmed {
        text-align: center;
        height: 50%;
        padding: 15px;
        position: relative;
    }

    .submit {
        color: black;
    }
</style>
<form class="andmed">
    *Eesnimi:<br>
    <input style="background-color:transparent" type="text" name="eesnimi" required>
    <br>
    *Perenimi:<br>
    <input style="background-color:transparent" type="text" name="perenimi" required>
    <br>
    E-mail:<br>
    <input style="background-color:transparent" type="text" name="e-mail">
    <br>
    *Pangakonto number:<br>
    <input style="background-color:transparent" type="text" name="kontonr" required>
    <br>
    *Aadress:<br>
    <input style="background-color:transparent" type="text" name="aadress" required>
    <br>
    *Postiindeks:<br>
    <input style="background-color:transparent" type="text" name="postiindeks" required>
    <br>
    <br>

    <p>*Vali sobiv:</p>

    <form>
        <input type="checkbox" name="film" value="DVD"> DVD<br>
        <input type="checkbox" name="film" value="Blu-Ray"> Blu-Ray<br>
        <input type="checkbox" name="film" value="VHS"> VHS<br>
        <br>

        <p>Vali pank:</p>
        <input type="radio" name="pank" value="SEB" checked> SEB
        <br>
        <input type="radio" name="pank" value="Swedbank"> Swedbank
        <br>
        <input type="radio" name="pank" value="Nordea"> Nordea pank
        <br>
        <input type="radio" name="pank" value="Danske Bank"> Danske Bank
        <br>
        <br>
        <input class="submit" type=button
               onClick="location.href='http://pseudobank.esy.es/BANKLINK/login.php'"
               value='Kinnita ja maksa'>
    </form>
</body>
</html>


<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="retekeyt@gmail.com">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="item_name" value="Movie">
    <input type="hidden" name="button_subtype" value="services">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

