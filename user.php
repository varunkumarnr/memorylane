<?php 
class User{
    private $user;
    private $con;
    public function __construct($con, $user){
        $this->con = $con;
        $stmt = $connect->prepare($con,'SELECT * FROM user WHERE username = $user');   
        $this-> user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getname(){
        $username = $this->user['username'];
        
    }
}
?>