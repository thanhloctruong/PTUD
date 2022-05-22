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
        padding: 50px 300px;
    }
</style>
</head>
<body>
<div class="back-to-top"></div>


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

<div class="container1">
  
    <form class="form">
  <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Tên Bệnh Viện </label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" name="name" value="" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Mã Bệnh Viện </label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" name="id" value="" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputadd" class="col-sm-2 col-form-label">Địa chỉ</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputphone" class="col-sm-2 col-form-label">Tầng số</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="tang" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">Số Ca Mắc</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" name="socamac" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputtinhtrang" class="col-sm-2 col-form-label">Số Ca Khỏi </label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" name="socakhoi" >
    </div>
    
    <div class="col-lg-10" style="padding:10px 0px 0px 500px;">
        <input type="submit" value="Cập nhật">
    </div>
</form>
        
   
</div>

<!-- ---------------------------------------------------Footer---------------------------------------------------------- -->
<?php
include '../HospitalAdmin/View/Footer.php'
?>

<script src="../view/Assets/js/jquery-3.5.1.min.js"></script>

<script src="../view/Assets/js/bootstrap.bundle.min.js"></script>

<script src="../view/Assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../view/Assets/vendor/wow/wow.min.js"></script>

<script src="../view/Assets/js/theme.js"></script>
  
</body>
</html>