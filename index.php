<?php
/**
 * Created by PhpStorm.
 * User: elo
 * Date: 30/11/15
 * Time: 12:36
 */
$page = empty($_GET['page']) ? 'home' : $_GET['page'];
require "model/database.php";
require "view/$page.php";