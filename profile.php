<?php 
require 'config.php';
require 'quiry.php';
if(!isset($_SESSION)) 
{ 
session_start();
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Lane</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style> <?php include 'css\profile.css'; ?></style>
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="image\literature.svg" width="40" height="40" alt="">
  </a>
</nav>

  <div class="row">
  <div class="col-2 col-sm-2 col-md-1 col-lg-1 side-nav">
  <ul class=nav-bar>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-home ">store_mall_directory</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-goals">emoji_events</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">today</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">notifications</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">mail</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">people_alt</i></a></li>
   <li class="nav-icons profile-li"><a href="#"><img class="profile-nav-image active" src="image\<?php echo $data['profilepic'];?>" alt="profile pic"></a></li>

</ul>
  </div>
  <div class="col-10 col-sm-10 .col-md-10 col-lg-7 profile-main">
  hello2
  </div>
  <div class="col-sm-4 col-md-2 col-lg-4 profile-side">
  hello3
  </div>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
</body>
</html>