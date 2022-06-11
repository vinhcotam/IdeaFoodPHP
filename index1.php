<?php
    include('header1.php');
?>

<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" style="height: 350px; width: 1500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/idea_studio (2).jpg" class="d-block w-100" style="height: 350px; width: 1500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/food.jpg" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/food2.jpg" class="d-block w-100" style="height: 350px; width: 1500px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header nen" >
                        <center>
                          
                            <h1 style="margin: 5%; font-weight:bold">GIAO DIỆN ADMIN</h1>
                            <br>
                             <a href="duyetbai.php">
                                  <div class="box">
                                      <div class="icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                      <div class="content">
                                          <br>
                                          <span>Duyệt bài viết</span>
                                      </div>
                                  </div>
                              </a>
                             <!-- <a href="duyetbai.php" class="btn btn-primary" style="margin: 5%;">Duyệt bài viết</a> -->
                            <br> 
                            <a href="account.php">
                                  <div class="box">
                                      <div class="icon"><i class="bi bi-github"></i></div>
                                      <div class="content">
                                          <br>
                                          <span>Quản lý tài khoản</span>
                                      </div>
                                  </div>
                              </a>
                            <!-- <a href="account.php" class="btn btn-primary" style="margin: 5%;">Quản lý tài khoản</a> -->
                            <br> 
                            <a href="comment.php">
                                  <div class="box">
                                      <div class="icon"><i class="bi bi-chat-square-dots-fill"></i></div>
                                      <div class="content">
                                          <br>
                                          <span>Quản lý bình luận</span>
                                      </div>
                                  </div>
                              </a>
                            <!-- <a href="comment.php" class="btn btn-primary" style="margin: 5%;">Quản lý bình luận</a> -->
                        </center>
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