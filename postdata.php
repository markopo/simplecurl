<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 22/03/2015
 * Time: 10:39
 */

if(isset($_POST["name"]) && isset($_POST["age"])){

    $name = $_POST["name"];
    $age = $_POST["age"];

    $dataString = "name: $name, age: $age \n";

    file_put_contents("data_test.txt", $dataString, FILE_APPEND);


}