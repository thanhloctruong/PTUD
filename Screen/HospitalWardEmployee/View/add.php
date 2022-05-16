
<!-- ------------------------------------------------------end header--------------------------------------------------- -->
<div class="page-banner overlay-dark bg-image" style="background-image: url('http://benhnhietdoi.vn/Uploads/images/%E1%BA%A2nh%20t%C6%B0%20li%E1%BB%87u/Anh%20BV.jpg');
background-position: center;background-size: cover;">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quản Lý Thông Tin Bệnh Nhân</li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Bệnh Nhân</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Thêm Bệnh Nhân</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
<!-- -------------------------------------------//--------------------------------------- -->
<?php
/* 
  if (isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $idbenhnhan=$_POST['idbenhnhan'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $tinhtrang=$_POST['tinhtrang'];

    $sql_pation="INSERT INTO benhnhan (name,idbenhnhan,address,phone,email,tinhtrang)
    VALUES (:name,:idbenhnhan, :address, :phone,:email, :tinhtrang)";
  
    $stmt =$conn->prepare($sql_pation);
    $stmt->bindParam(':name',$name,PDO::PARAM_STR);
    $stmt->bindParam(':idbenhnhan',$idbenhnhan,PDO::PARAM_STR);
    $stmt->bindParam(':address',$address,PDO::PARAM_STR);
    $stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':tinhtrang',$tinhtrang,PDO::PARAM_STR);

    $stmt->execute();

  } */

?>
<style>
  .container1{

    padding: 50px 0px;
  }
  .form{
    padding: 0px 300px;
  }
</style>


<div class="container1">
  
       <form class="form" method="POST" action=""> 
              
          <div class="form-group row">
            <label for="inputname" class="col-sm-2 col-form-label">Họ và Tên</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="name"  placeholder="nhập tên bệnh nhân">
            
             <!--  <?php
                /* if (empty($error['name']['required']))
                {
                  echo ' <span style="color:red">'.$error['name']['required'].'</span>';
                } */
              
              ?> -->
             
            </div>
           
          </div>
          <!-- <div class="form-group row">
            <label for="inputid" class="col-sm-2 col-form-label">Mã bệnh nhân</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="idbenhnhan" placeholder="nhập mã bệnh nhân">
            </div>
          </div> -->

          <div class="form-group row">
            <label for="inputadd" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="address" placeholder="nhập địa chỉ">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputphone" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone" placeholder="nhập số điện thoại">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" name="email" placeholder="email@gmail.com">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputtinhtrang" class="col-sm-2 col-form-label">Tình trạng</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="tinhtrang" >
            </div>
            
            <div class="col-lg-10" style="padding:30px 0px 30px 500px;">
                <input type="submit" name='submitbtn' value="Thêm">
               
            
            </div>
        </form>
        
   
</div>
