<header>
    <img class="logo" src="static/img/header_logo.png">
    <div id="search">
        <div id="tfheader">
            <form id="tfnewsearch" method="get" action="controller/search.php">
                <input type="text" class="tftextinput" name="mainsearch" size="21" maxlength="120">
                <input type="submit" value="Otsi" class="tfbutton">
                <select name="searchdrop" id="dropsearch">
                    <option value="riik">Riik</option>
                    <option value="zanr">Žanr</option>
                    <option value="aasta">Aasta</option>
                </select>
            </form>
        </div>
    </div>
</header>
<!---
old code
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" method="get" name="dropvalik">Vali
    <span class="caret"></span></button>
<ul class="dropdown-menu">
    <li><a value="aasta">Aasta</a></li>
    <li><a value="zanr">Žanr</a></li>
    <li><a value="riik">Riik</a></li>
</ul>
--->
