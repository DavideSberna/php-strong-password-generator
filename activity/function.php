<?php

function prova($p){
    $stringPath = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789";
    $pass = [];
    $password = $_GET['password'];
    for($i = 0; $i < $password; $i++){
        $pass[] = $stringPath[rand(0, strlen($stringPath) - 1)];    
    }
    return implode($pass);
}
 
?>