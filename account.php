<?php
    session_start();
    include('header.php');
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Giao diện admin
                        
                        <a href="adminpage.php" class="btn btn-danger float-end">Quay lại</a>
                        <a href="account_add.php" class="btn btn-primary float-end">Thêm tài khoản nhân viên</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('dbconnect.php');
                                    $ref_table="Account";
                                    $fetchdata=$database->getReference($ref_table)->getValue();
                                    if($fetchdata>0){
                                        foreach($fetchdata as $key=>$row){
                                            // $row[''];
                                            // $row[''];
                                            // $row[''];
                                            // $row[''];
                                            ?>
                                            <tr>
                                                <td><?=$row['username'];?></td>
                                                <td><?=$row['password'];?></td>
                                                <td><?=$row['email'];?></td>
                                                <td><?=$row['level'];?></td>
                                                <td>
                                                    <a href="editaccount.php" class="btn btn-success">Sửa</a>
                                                    <a href="deleteaccount.php" class="btn btn-danger">Xóa</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }

                                    }else{
                                        ?>
                                        <tr>
                                            <td colspan=6>K có bản ghi nào</td>
                                        </tr>
                                        <?php

                                    }
                                ?>
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>