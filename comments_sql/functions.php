<?php
function connect_db(){
    global $connection;
    $host="localhost";
    $user="test";
    $pass="t3st3r123";
    $db="test";
    $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
    mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function getCount(){
    global $connection;
    $sqlCount = "SELECT COUNT(*) FROM 10163348_comments";
    $exec = mysqli_query($connection, $sqlCount);
    $commentCount = mysqli_fetch_assoc($exec);

    print_r("<b><p>Kokku kommentaare:</b> ".$commentCount['COUNT(*)']);
}