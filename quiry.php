<?php

if(!isset($_SESSION)) 
{ 
session_start();
}
try{
$username=$_SESSION['username'];
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$getuser=$connect->prepare("SELECT * from users where user='$username'");  
$getuser->execute();
$data = $getuser->fetch(PDO::FETCH_ASSOC);


}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>