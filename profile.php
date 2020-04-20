<?php 
require 'config.php';
if(!isset($_SESSION)) 
{ 
session_start();
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . $_SESSION['email']. "!";
} else {
    echo "Please log in first to see this page.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Lane</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="image\literature.svg" width="40" height="40" alt="">
  </a>
</nav>

</div>
    
</body>
</html>