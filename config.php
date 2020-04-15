<?php
session_start();
define('dbhost','Localhost');
define('dbname','memorylane');
define('dbuser','root');
define('dbpass','V@run2018');
try{
    $connect = new PDO("mysql:host=".dbhost.";dbname=".dbname,dbuser,dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo("connection sucessfull");
}catch(PDOException $e){
    echo $e -> getMessage();
}

?>