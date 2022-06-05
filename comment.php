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
                        <h3>Quản lý bình luận
                        
                        <a href="index.php" class="btn btn-danger float-end">Quay lại</a>
                        </h3>
                    </div>
                    <?php
                            if(isset($_SESSION['status'])){
                                echo "<h4>".$_SESSION['status']."</h4>";
                                unset($_SESSION['status']);
                            }
                        ?>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Mã bình luận</th>
                                    <th>Người bình luận</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Ngày bình luận</th>
                                    <th>Mã bài viết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('dbconnect.php');
                                    $ref_table="comments";
                                    $fetchdata=$database->getReference($ref_table)->getValue();
                                    if($fetchdata>0){
                                        foreach($fetchdata as $key=>$row){
                                            // $row[''];
                                            // $row[''];
                                            // $row[''];
                                            // $row[''];
                                            ?>
                                            <tr>
                                                <td><?=$row['commentid'];?></td>
                                                <td><?=$row['username'];?></td>
                                                <td><?=$row['content'];?></td>
                                                <td><?=$row['date'];?></td>
                                                <td><?=$row['postid'];?></td>
                                                <td>
                                                    <!-- <a href="deleteaccount.php?id=<?=$key; ?>" class="btn btn-danger">Xóa</a> -->
                                                    <form action="code.php" method="POST">
                                                        <input type="hidden" name="id_an" value="<?=$key;?>">
                                                        <button type="submit" name="delete_comment" class="btn btn-danger">Ẩn</button>
                                                    </form>
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