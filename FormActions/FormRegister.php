<?php

include '../Database/config.php';
extract($_POST);

$id = 0;


$sql= "select * from tbl_users where email = ?";

$result = $conn->prepare($sql);

$result->execute([$email]);

if($result->rowCount()>0){

}
else{
    $acc_statuc =1;
    $role = "student";
    $date = date("Y-m-d");
    $password = md5($pass);
    $sql= "insert into tbl_users values(?,?,?,?,?,?,?)";

    $result = $conn->prepare($sql);
    
    $result->execute(['0',$username,$email,$password,$date,$acc_statuc,$role]);
    header('location:../account/');
}






?>