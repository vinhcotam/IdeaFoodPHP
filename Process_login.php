<?php session_start(); ?>
<?php
//Gọi file kết nối cơ sở dữ liệu
include('dbconnect.php');

// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["sbLogin"])) {
    // lấy thông tin người dùng
    $mail = $_POST["txtEmail"];
    $password = $_POST["txtPass"];
    if($mail=="" ||$password==""){
        echo '<script language="javascript">';
        echo 'alert("Bạn chưa nhập tài khoản hoặc mật khẩu"); window.location="index.php"';
        echo '</script>';
    }
    $ref_table="Account/";
    $fetchdata=$database->getReference($ref_table)->getValue();
    $dungtaikhoan = false;
        foreach($fetchdata as $key=>$row){
            if($row['email'] == $mail && $row['password'] == $password)
            {
                    if($row['level'] == "0"){
                        $dungtaikhoan = true;
                        header("Location: index1.php");
                    }else if($row['level'] == "1" ||$row['level'] == "2"){
                        $dungtaikhoan=true;
                        echo '<script language="javascript">';
                        echo 'alert("Bạn không có quyền truy cập"); window.location="index.php"';
                        echo '</script>';
                    }
            }  
    }
    
    if ($dungtaikhoan == false){
        echo '<script language="javascript">';
        echo 'alert("Bạn đã nhập sai mật khẩu"); window.location="index.php"';
        echo '</script>';
    }
}

    
?>



    