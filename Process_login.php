<?php session_start(); ?>
<?php
//Gọi file kết nối cơ sở dữ liệu
include('dbconnect.php');

// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["sbLogin"])) {
    // lấy thông tin người dùng
    $mail = $_POST["txtEmail"];
    $password = $_POST["txtPass"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    // $username = strip_tags($username);
    // $username = addslashes($username);
    // $password = strip_tags($password);
    // $password = addslashes($password);

    $ref_table="Account/";
    $fetchdata=$database->getReference($ref_table)->getValue();
        foreach($fetchdata as $key=>$row){
            // $_SESSION['username'] = $row['email'];
            // $_SESSION['level'] = $row['level'];

            // if($row['level'] == 0){
            //     header('Location: adminpage.php');}
            // else
            // {
            //     header('Location: login.php');
            // }
            //  echo ' '+$row['level'];
            echo $row['email'];
            if($row['email'] == $mail && $row['level'] == "0" && $row['password'] == $password)
            {
                header("Location: adminpage.php");
            }
            else{
                header("Location: login.php");
            }
    }}

    
?>



    