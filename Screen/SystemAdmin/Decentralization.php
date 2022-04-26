<?php
 require_once '../../Model/components/Connect.php'
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
   
    .table{
        width: 1000px;
    }
</style>
</head>
<body>
<div class="back-to-top"></div>

<!-- ------------------------------------------------------end header--------------------------------------------------- -->





<div class="container1">

        <div class="title" style="text-align:center;padding-top:20px">
            <h3>Phân Quyền</h3>
        </div>
  
       <form class="form" method="post" action=""> 
          

           <table class="table">
  <thead>
    <tr>

      <th scope="col-sm-1">MaTaiKhoan</th>
      <th scope="col-sm-1">TenDangNhap</th>
      <th scope="col-sm-1">Matkhau</th>
      <th scope="col-sm-1">Hoten</th>
      <th scope="col-sm-1">Ngaysinh</th>
      <th scope="col-sm-1">SDT</th>
      <th scope="col-sm-1">Email</th>
      <th scope="col-sm-1">CCCD</th>
      <th scope="col-sm-1">Diachi</th>
      <th scope="col-sm-1">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
                  <td><input type="text" name='idtaikhoan'></td>
                   <td><input type="text" name='username'></td>
                   <td><input type="text" name='password'></td>
                   <td><input type="text" name='name'></td>
                   <td><input type="date" name='ngaysinh'></td>
                   <td><input type="text" name='email'></td>
                   <td><input type="text" name='cccd'></td>
                   <td><input type="text" name='role'></td>
    </tr>
    
    
  </tbody>
</table>
           
        </form>
        
   
</div>


<?php
include("../../view/components/Footer.php")
?>

<script src="../view/Assets/js/jquery-3.5.1.min.js"></script>

<script src="../view/Assets/js/bootstrap.bundle.min.js"></script>

<script src="../view/Assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../view/Assets/vendor/wow/wow.min.js"></script>

<script src="../view/Assets/js/theme.js"></script>
  
</body>
</html>