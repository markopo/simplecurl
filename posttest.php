<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 22/03/2015
 * Time: 10:40
 */

require "SimpleCurl.php";

$url = "http://localhost:8100/simplecurl/postdata.php";

$sc = new SimpleCurl($url);

$dataStr = http_build_query(array("name"=>"marko","age"=>38));

$sc->Post($dataStr);





