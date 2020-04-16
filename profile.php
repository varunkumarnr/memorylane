<?php 
require 'config.php';
if ( ! isset($_GET['u']) || strlen($_GET['u']) < 1  ) 
{
    header("Location:usernotfound.php");
}
else{
    $username = htmlentities($_REQUEST['u']);
    try{
        $stmt = $connect->prepare('SELECT id, email, username, password FROM logininfo WHERE username = :username');
        $stmt-> execute([
           ':username' => $username
        ]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($data == false){
            header("Location:usernotfound.php?u=".$_GET['u']);
        }
        else{
            $email = $data['email'];
        }
    }
    catch(PDOException $e){
        echo "$e->getMessage();";

    }
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
<?php echo '<p> Welcome:'.$username;'</p>'?> 
<?php echo '<p> email:'.$email;'</p>' 
?>
</div>
    
</body>
</html>