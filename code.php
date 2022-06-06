<?php
    session_start();
    include('dbconnect.php');

    //them tai khoan
    if(isset($_POST['save_account'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $level="1";
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

    //sua taikhoan
    if(isset($_POST['update_account'])){
        $id=$_POST['id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $level=1;
        $update_account_data=[
            'username' =>$username,
            'password' =>$password,
            'email' =>$email,
            'level' =>$level,
        ];
        $ref_table="Account/".$id;
        $update_account_query=$database->getReference($ref_table)->update($update_account_data);
        if($update_account_query){
            $_SESSION['status'] = "Sửa  thành công";
            header("Location: account.php");
        }else{
            $_SESSION['status'] = "Sửa thất bại";
            header("Location: account.php");
        }
    }

    //Xoa taikhoan
    if(isset($_POST['delete_account'])){
        $id=$_POST['id_key'];
        $ref_table="Account/".$id;
        $delete_account=$database->getReference($ref_table)->remove();
        if($delete_account){
            $_SESSION['status'] = "Xóa  thành công";
            header("Location: account.php");
        }else{
            $_SESSION['status'] = "Xoá thất bại";
            header("Location: account.php");
        }
    }

    //duyet bai duyetbai
    if(isset($_POST['duyetbai'])){
        $id=$_POST['id_key_duyet'];
        $status=$_POST['status'];
        $duyetpost=[
            'status' =>true,
        ];
        $ref_table="post/".$id;
        $duyetpostquery=$database->getReference($ref_table)->update($duyetpost);
        if($duyetpost){
            $_SESSION['status'] = "Duyệt bài thành công";
            header("Location: duyetbai.php");
        }
    }

    //Xoa taikhoan
    if(isset($_POST['delete_comment'])){
        $id=$_POST['id_an'];
        $ref_table="comments/".$id;
        $delete_account=$database->getReference($ref_table)->remove();
        if($delete_account){
            $_SESSION['status'] = "Xóa  thành công";
            header("Location: comment.php");
        }else{
            $_SESSION['status'] = "Xoá thất bại";
            header("Location: comment.php");
        }
    }

?>