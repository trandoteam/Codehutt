<?php

include '../Database/config.php';
extract($_POST);
session_start();

$sql= "select * from tbl_users where email = ? and password = ?";

$result = $conn->prepare($sql);
$pass = md5($pass);

$result->execute([$username,$pass]);

if($result->rowCount()>0){
    $row  = $result->fetch();
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];

    if($row['role'] == "student"){
        header('location:../index.php');
    }
    else if($row['role'] == "admin"){
        header('location:../AdminPanel/');
    }


}
else{
   
    header('location:../account/register.php');
}






?>