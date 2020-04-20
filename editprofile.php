<?php
require 'config.php';
if(isset($_POST['cancel'])){
  header("Location:editprofile.php");
  return;
}
$failure = false;
$status_color = 'red';
if(isset($_POST['edit'])){
  $name = htmlentities($_POST['name']);
  $email = htmlentities($_POST['email']);
  $user = htmlentities($_POST['user']);
  $github = htmlentities($_POST['github']);
  $profileimg = htmlentities($_POST['profile-img']);
  $bg_img = htmlentities($_POST['bg-img']);
  $gender = htmlentities($_POST['gender']);
  $mobile = htmlentities($_POST['mobile']);
  if(isset($user)&&isset($name)&&isset($email)){
    if(strlen($user)<1||strlen($name)<1){
      $failure = "name and user name is compalsary";
    }if(strlen($email)<2){
      $failure = "enter email";
    }
    if(strpos($email,'@')===false){
      $failure = "check your email";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory lane</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style> <?php include 'css\editprofile.css'; ?></style>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="image\literature.svg" width="40" height="40" alt="logo">
  </a>
</nav>
</div>
<?php
  if ( $failure !== false ) 
  {
    echo(
    '<p style="color:' .$status_color.';" class="col-sm-10 col-sm-offset-2">'.
      ($failure).
      "</p>\n"
    );
  }
 ?>
    <div class="container">
<h3>Edit your profile</h3>
<div class="row edit-section">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Edit</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Change Password</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">privacy</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Delete</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <form action="" method="post">
        <div class= form-group>
          <input type="file" class="bg-img-input" name="bg-img" id='bg-img-input'  onchange="loadFile(event)">
          <img class="bg-img" id="bg-img" src="image\bg-img.jfif" alt="background image">
          </div>
          <div class="form-group form-2">
          <input type="file" class="profile-img-input" name="profile-img" id='profile-img-input'  onchange="profilepic(event)">
          <img class="profile-img" id="profile-img" src="image\41500904_261335314421600_1925257624878579712_n.jpg" alt="profile image">
          </div>
          <div class="form-name">
           <div class="form-group form-3">
           <label class="control-label" for="name">Name:</label>
            <input class="form-control" type="text" name="name" class="name" id="name" value="varun"> 
           </div>
           </div>
           <div class="form-name">
           <div class="form-group form-3">
           <label class="control-label" for="user">Username:</label>
            <input class="form-control" type="text" name="user" class="user" id="user" value="varun"> 
           </div>
           </div>
           <div class="form-name">
           <div class="form-group form-4">
           <label class="control-label" for="email">Email:</label>
            <input class="form-control" type="text" name="email" class="emai" id="email" value="admin@admin.com"> 
           </div>
           </div>
           <div class="form-name">
           <div class="form-group form-3">
           <label class="control-label" for="github">Mobile:</label>
            <input class="form-control" type="text" name="github" class="github" id="github" value="varunkumarnr"> 
           </div>
           </div>
           <div class="form-name">
           <div class="form-group form-3">
           <label class="control-label" for="mobile">GitHub:</label>
            <input class="form-control" type="text" name="mobile" class="mobile" id="mobile" value="9999999999"> 
           </div>
           </div>
           <div class="form-name">
           <div class="form-group form-3">
           <label class="control-label" for="gender">Gender:</label>
            <input class="form-control" type="text" name="gender" class="gender" id="gender" value="Male"> 
           </div>
           </div>
           <div class="form-submit">
           <div class="form-group">
            <input class="btn btn-primary" type="submit" name="edit" value="save">
            <input class="btn" type="submit" name="cancel" value="Cancel">
           </div>
           </div>
        </form>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">..2.</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">.3..</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">.4..</div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="javascript\editprofile.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</div>
    
</body>
</html>