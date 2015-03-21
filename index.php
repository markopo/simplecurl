<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 21/03/2015
 * Time: 09:56
 */

require 'SimpleCurl.php';

$url = "https://api.github.com/users/markopo";
$sc = new SimpleCurl($url);
$data = $sc->Fetch();

print_r($data); 