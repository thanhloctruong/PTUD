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

<div class="page-banner overlay-dark bg-image" style="background-image: url('http://benhnhietdoi.vn/Uploads/images/%E1%BA%A2nh%20t%C6%B0%20li%E1%BB%87u/Anh%20BV.jpg');
background-position: center;background-size: cover;">
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
  
    <form class="form" action="">
    <div class="form-group row">
            <label for="inputname" class="col-sm-2 col-form-label">Tên Đăng Nhập</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="user" >
            </div>
           
          </div>
          <div class="form-group row">
            <label for="inputid" class="col-sm-2 col-form-label">Mật khẩu</label>
            <div class="col-sm-10">
              <input type="password" class="form-control"  name="pass">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputid" class="col-sm-2 col-form-label">Mã bệnh nhân</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="idbenhnhan">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputid" class="col-sm-2 col-form-label">Họ Tên</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="name">
            </div>
          </div>
        
          <div class="form-group row">
            <label for="inputid" class="col-sm-2 col-form-label">Ngày sinh</label>
            <div class="col-sm-10">
              <input type="date" class="form-control"  name="date" >
            </div>
          </div>

          <div class="form-group row">
            <label for="inputphone" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" name="email" >
            </div>
          </div>
          
          <div class="form-group row">
            <label for="inputadd" class="col-sm-2 col-form-label">CCCD</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="cccd" >
            </div>
          </div>

          
          <div class="form-group row">
            <label for="inputadd" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="address" >
            </div>
          </div>

          <div class="form-group row">
            <label for="inputadd" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="role" >
            </div>
          </div>

          <div class="form-group row">
            <label for="inputtinhtrang" class="col-sm-2 col-form-label">Phường_BV Công Tác</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="phuong" >
            </div>
            
            <div class="col-lg-10" style="padding:30px 0px 30px 500px;">
                <input type="submit" name='submitbtn' value="Cập nhật">
               
            
            </div>
      </form>
        
   
</div>

<!-- ---------------------------------------------------Footer---------------------------------------------------------- -->
<?php
include("./View/Footer.php")
?>
