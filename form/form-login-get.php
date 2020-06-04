<?php
//Post gửi dữ liệu lên server và hiện thông tin form lên link điều hướng
if(isset($_GET['btnSub'])){
    $email = $_GET['email'];// email
    $pwd = $_GET['password'];// password
}