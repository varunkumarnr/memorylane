<?php
require 'config.php';
if ( isset($_POST['logout'] ) ) {
  // Redirect the browser to index.php
  header("Location: index.php");
  return;
}
$failure= false;
$status_color = 'green';
if(isset($_POST['signin'])){
  $email = htmlentities($_POST['who']);
  $username = htmlentities($_POST['user']);
  $password = htmlentities($_POST['pass']);
  $status_color = 'red';
  if(isset($email)&&isset($username)&&isset($password)){
    if(strlen($email)<1||strlen($username)<1||strlen($password)<1)
      $failure = "Fill every Field";
    
    elseif(strpos($email,'@')===false)
      $failure = "Enter correct email address";
    
    elseif(!isset($_POST['check']))
      $failure = "read the terms and conditions";
    
    if($failure == false){
      try{
        $stmt = $connect->prepare("INSERT INTO users (useremail, user, userpassword)
        VALUES (:email, :username, :password)
        ");
        $stmt2 = $connect->prepare("INSERT INTO logininfo (email, username, password)
        VALUES (:email, :username, :password)");
        $stmt-> execute([
          ':email' => $email,
          ':username' => $username,
          ':password' => $password,
        ]);
        
        header('Location: index.php?action=joined');
        return;
      }
      catch(PDOExcepion $e){
        echo $e-> getMessage();

      }
    }
  }
}
 
  if(isset($_GET['action'])&&$_GET['action']=='joined'){
    $failure = 'Registration successfull. Go to  <a href="login.php">Login page</a>';
  }

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
  <button type="button" class="btn btn-light login-btn-desktop"><a href="login.php">Login to an Existing account</a></button>
  <button type="button" class="btn btn-light login-btn-mobile"><a href="login.php">Login</a></button>
</nav>

  
<div class="sign-up col-sm-4">
<h4>SIGN UP TO CONTINUE</h4>
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
<div class="sign-up-border ">
<img class="sign-up-logo" src="image\literature.svg" alt="logo">
<form method="post" >
  <div class="form-group ">
    <label class="control-label col-sm-2" for="email">Email:</label>
       <input class="form-control" type="text" name="who" id="email">
       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
 
  <div class="form-group">
    <label class="control-label " for="username">User Name:</label>
      
       <input class="form-control" type="text" name="user" id="username">
      </div>
 
 <div class="form-group">
    <label class="control-label" for="pass">Password:</label>
      
        <input class="form-control" type="password" name="pass" id="pass">
      </div>
     

  <div class="form-check">
    <input type="checkbox" name="check" value="value1"  class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Do you agree our Terms and Conditon</label>
  </div>
  <div class="form-group">
  
      <input class="btn btn-primary" type="submit" name="signin" value="sign In">
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