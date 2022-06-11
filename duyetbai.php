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
                        <h4>Duyệt bài viết
                        
                        <a href="index1.php" class="btn btn-danger float-end">Quay lại</a>
                        </h4>
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
                                    <th>Tên bài viết</th>
                                    <th>Người đăng</th>
                                    <th>Ngày đăng</th>
                                    <th>Thể loại</th>
                                    <th>Trạng thái</th>
                                    <th>Duyệt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('dbconnect.php');
                                    $ref_table="post";
                                    $fetchdata=$database->getReference($ref_table)->getValue();
                                    if($fetchdata>0){
                                        foreach($fetchdata as $key=>$row){
                                            // $row[''];
                                            // $row[''];
                                            // $row[''];
                                            // $row[''];
                                            ?>
                                            <tr>
                                                <td><?=$row['postname'];?></td>
                                                <td><?=$row['username'];?></td>
                                                <td><?=$row['date'];?></td>
                                                <td><?=$row['category'];?></td>

                                                <?php
                                                if($row['status']==true){
                                                    echo "<td id=".'status'.">".'Đã duyệt'."</td>";
                                                   
                                                }else{
                                                    echo "<td id=".'status'.">".'Chưa duyệt'."</td>";
                                                }
                                                ?>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        
                                                        <input type="hidden" name="id_key_duyet" value="<?=$key;?>">
                                                        <?php
                                                            if($row['status']==false){
                                                                echo "<button type=".'submit'." name=".'duyetbai'." class=".'btn btn-danger'.">Duyệt</button>";
                                                            }else{
                                                                // echo "<button type=".'submit'." name=".'duyetbai'." class=".'btn btn-danger'.">Duyệt</button>";
                                                            }
                                                        ?>
                                                        
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