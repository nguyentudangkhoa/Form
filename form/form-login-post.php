<?php  
require_once('../include/db.include.php');
//required
//include
//include_once

//Post gửi dữ liệu lên server nhưng không hiện thông tin form lên link điều hướng
if(isset($_POST['btnSub'])){
    $email = $_POST['email'];// email
    $pwd = $_POST['password'];// password
    $sql = "SELECT * FROM users WHERE username = '$email' AND password = '$pwd'";//sql querry command
    $result = $pdo->query($sql);// querry sql
    if($email == "" && $pwd == ""){
        echo "email and password is empty";
    }else if($result->rowCount()>0){// check have user
        echo "Loged in";
    }

}