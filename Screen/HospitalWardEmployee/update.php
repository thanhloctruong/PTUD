<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <title>One Health - Medical Center</title>
<link rel="stylesheet" href="../../view/Assets/css/maicons.css">
<link rel="stylesheet" href="../../view/Assets/css/bootstrap.css">
<link rel="stylesheet" href="../../view/Assets/vendor/owl-carousel/css/owl.carousel.css">
<link rel="stylesheet" href="../../view/Assets/vendor/animate/animate.css">
<link rel="stylesheet" href="../../view/Assets/css/theme.css">
<link rel="stylesheet" href="../../view/Assets/css/index.css">

<style>
    .form
    {
        padding-top: 50px;
    }
</style>
</head>
<body>
<div class="back-to-top"></div>
<header>
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 text-sm">
          <div class="site-info">
            <a href="tel:+"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
            <span class="divider">|</span>
            <a href="mailto:thanhloctruong11022@gmail.com"><span class="mai-mail text-primary"></span>thanhloctruong102@@2gmail.com</a>
          </div>
        </div>
        <div class="col-sm-4 text-right text-sm">
          <div class="social-mini-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-dribbble"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .topbar -->

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

      <form action="index.php?act=search" method="post">
        <div class="input-group input-navbar">
          <div class="input-group-prepend">
            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
          </div>
          <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
        </div>
      </form>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Trang chủ</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.php?act=about">Về chúng tôi</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="index.php?act=tuvan">Tư vấn cho bệnh nhân</a> <!--Counseling-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?act=quanly">Quản lý thông tin bệnh nhân
              


            </a> <!--ManagePatientInformation--> 
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.php?act=">In giấy xác nhận</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?act=contact">Yêu cầu tư vấn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?act=new">Tin tức</a>
          </li> -->
          <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="index.php?act=login">Logout</a>
          </li>
        </ul>
      </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
  </nav>
</header>


<!-- --------------------------------------------------------Body---------------------------------------------------------------------- -->

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quản Lý Thông Tin Bệnh Nhân</li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật Bệnh Nhân</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Cập Nhật Bệnh Nhân</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

<div class="container">
  
    <form class="form">
  <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Họ và Tên</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name" value="" placeholder="nhập tên bệnh nhân">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputid" class="col-sm-2 col-form-label">Mã bệnh nhân</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputid" placeholder="nhập mã bệnh nhân">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputadd" class="col-sm-2 col-form-label">Địa chỉ</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputadd" placeholder="nhập địa chỉ">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputphone" class="col-sm-2 col-form-label">Số điện thoại</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputphone" placeholder="nhập số điện thoại">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputemail" placeholder="email@gmail.com">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputtinhtrang" class="col-sm-2 col-form-label">Tình trạng</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputtinhtrang" >
    </div>
    
    <div class="col-lg-10" style="padding:10px 0px 0px 650px;">
        <input type="submit" value="Cập nhật">
    </div>
</form>
        
   
</div>

<!-- ---------------------------------------------------Footer---------------------------------------------------------- -->
<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-8 col-lg-4 py-4">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <!-- <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div> -->
        <div class="col-sm-8 col-lg-4 py-4">
          <h5>Các thành viên nhóm 6868: </h5>
          <ul class="footer-menu">
            <li><a href="#">Hoàng Thị Chi</a></li>
            <li><a href="#">Trần Hữu Bằng</a></li>
            <li><a href="#">Trần Quang Chí</a></li>
            <li><a href="#">Bùi Hải Đăng</a></li>
            <li><a href="#">Nguyễn Thị Hằng Ly</a></li>
            <li><a href="#">Phạm Văn Mạnh</a></li>
          </ul>
        </div>
        <div class="col-sm-8 col-lg-4 py-4">
          <h5>Liên hệ</h5>
          <p class="footer-link mt-2">12 Nguyễn Văn Bảo, Phường 4, quận Gò Vấp, TP.HCM</p>
          <a href="#" class="footer-link mt-2">701-573-7582</a></br>
          <a href="#" class="footer-link mt-2">healthcare@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="#" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../view/Assets/js/jquery-3.5.1.min.js"></script>

<script src="../view/Assets/js/bootstrap.bundle.min.js"></script>

<script src="../view/Assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../view/Assets/vendor/wow/wow.min.js"></script>

<script src="../view/Assets/js/theme.js"></script>
  
</body>
</html>