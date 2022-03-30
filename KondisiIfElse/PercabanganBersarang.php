<?php

$username = "admin";
$password = "1234";
$adminStat = true;

if($username == "admin" && $password == "1234"){
    if($adminStat){
        echo "Selamat datang Administrator";
    } else {
        echo "Selamat datang User";
    }
} else {
    echo "Maaf Username dan Password Salah";
}

?>