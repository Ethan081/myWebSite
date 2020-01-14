<?php
function getPdo(){
    $pdo = new PDO('mysql:host=localhost;dbname= ???; charset=utf8' , 'etiennez', 'root',[
    ]);
}