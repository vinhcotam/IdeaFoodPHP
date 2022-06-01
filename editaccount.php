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
                        <a href="account_add.php" class="btn btn-primary float-end">Quản lý tài khoản</a>
                            <a href="account.php" class="btn btn-danger float-end">Quay lại</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <?php
                                include('dbconnect.php');
                                    $ref_table="Account";
                                    $id=$_GET['id'];

                                    $editdata=$database->getReference($ref_table)->getChild($id)->getValue();

                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$id;?>">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" value="<?=$editdata['username']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">password</label>
                                        <input type="password" name="password" value="<?=$editdata['password']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">email</label>
                                        <input type="email" name="email" value="<?=$editdata['email']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_account"></label>
                                        <button type="submit" name="update_account" class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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