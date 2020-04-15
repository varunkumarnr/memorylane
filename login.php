<?php
 require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Lane</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style> <?php include 'style.css'; ?></style>
</head>
<body>
<div class="container-fluid">

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="image\literature.svg" width="40" height="40" alt="">
  </a>
</nav>

  
<div class="sign-up col-sm-4">
<h4>Login To Your Account</h4>
<?php
  /*if ( $failure !== false ) 
  {
    echo(
    '<p style="color:' .$status_color.';" class="col-sm-10 col-sm-offset-2">'.
      ($failure).
      "</p>\n"
    );
  }*/
              ?>
<div class="sign-up-border ">
<img class="sign-up-logo" src="image\literature.svg" alt="logo">
<form method="post" >
  
  <div class="form-group">
    <label class="control-label " for="username">User Name:</label>
      
       <input class="form-control" type="text" name="user" id="username">
      </div>
 
 <div class="form-group">
    <label class="control-label" for="pass">Password:</label>
      
        <input class="form-control" type="password" name="pass" id="pass">
      </div>
     

  <div class="form-group">
  
      <input class="btn btn-primary" type="submit" name="signin" value="Log In">
        <input class="btn" type="submit" name="logout" value="Cancel">
        </div>
    
</form>
</div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</div>    
</body>
</html>