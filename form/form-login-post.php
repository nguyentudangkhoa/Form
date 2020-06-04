<?php  
require_once('../include/db.include.php');
//required
//include
//include_once


if(isset($_POST['btnSub'])){
    $email = $_POST['email'];// email
    $pwd = $_POST['password'];// password
    $sql = "SELECT * FROM users WHERE username = '$email' AND password = '$pwd'";
    $result = $pdo->query($sql);
    if($email == "" && $pwd == ""){
        echo "email and password is empty";
    }else if($result->rowCount()>0){
        echo "Loged in";
    }

}