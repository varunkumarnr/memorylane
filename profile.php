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
    <style> <?php include 'css\profilenav.css'; ?></style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <style> <?php include 'css\profile.css'; ?></style>
</head>
<body>
<div class="container-fluid">


  <div class="row">
  <div class="col-1 col-sm-1 col-md-1 col-lg-1 side-nav">
  <ul class=nav-bar>
  <img class=nav-logo src="image\literature.svg" width="40" height="40" alt="">
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-home ">store_mall_directory</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-goals">emoji_events</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">today</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">notifications</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">mail</i></a></li>
   <li class="nav-icons"><a href="#" ><i class="material-icons icon-diary">people_alt</i></a></li>
   <li class="nav-icons profile-li"><a href="#"><img class="profile-nav-image active" src="image\<?php echo $data['profilepic'];?>" alt="profile pic"></a></li>
</ul>
</div>
  <div class="col-11 col-sm-11 .col-md-10 col-lg-8 profile-main">
  <div class="nav-profile-containor">
  <div class=name-profile><?php echo $data['username']; ?></div>
  <div class=username-profile>@<?php echo $data['user']; ?></div>
</div>
  <img class="bg-img img-fluid" src="image\<?php echo $data['backgroundpic'];?>" alt="background image">
  <img class="profile-img img-fluid" src="image\<?php echo $data['profilepic'];?>" alt="background image"><br>
  <span class="goals-count">30</span><br>
  <span class="goals-title">Total Goals</span>
  </div>
  <div class="col-sm-4 col-md-2 col-lg-3 profile-side">
  hello3
  </div>
</div>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
</body>
</html>