<?php 

function dog() {
    $dog = file_get_contents("https://dog.ceo/api/breeds/image/random");
    $ret = json_decode($dog, true);
    return $ret["message"];
}


?>