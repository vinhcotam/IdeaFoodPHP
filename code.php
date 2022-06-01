<?php
    include('dbconnect.php');
    session_start();
    if(isset($_POST['save'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $level=1;
        $account_data=[
            'username' =>$username,
            'password' =>$password,
            'email' =>$email,
            'level' =>$level,
        ];
    }
    $ref_table="Account";
    $accountRef=$database->getReference($ref_table)->push($account_data);
    if($accountRef){
        $_SESSION['status'] = "Thêm nhân viên thành công";
        header("Location: account.php");
    }else{
        $_SESSION['status'] = "Thêm thất bại";
        header("Location: account.php");
    }
?>