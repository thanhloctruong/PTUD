<style>
  .container1{
    padding: 50px 0px;
  }
  .form{
    padding: 0px 300px;
  }
</style>


<!-- ------------------------------------------------------end header--------------------------------------------------- -->
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quản Lý Thông Tin Sản Phẩm</li>
            <li class="breadcrumb-item active" aria-current="page">Cập Nhật Thông Tin Sản Phẩm</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Cập nhật Sản Phẩm</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
<!-- -------------------------------------------//--------------------------------------- -->

<div class="container1">
  
       <form class="form" method="post" > 
           
         <!-- <div class="form-group row">
            <label for="inputid" class="col-sm-2 col-form-label">Mã bệnh viện</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="idbenhvien" >
            </div>
          </div> -->

          <div class="form-group row">
            <label for="inputname=" class="col-sm-2 col-form-label">Mã Sản Phẩm</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="ProductID" value="<?php echo $id?>" readonly >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputname=" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="Name" value="<?php echo $name?>">
            </div>
          </div>
         
          <div class="form-group row">
            <label for="inputadd" class="col-sm-2 col-form-label">Đơn Giá</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="price" value="<?php echo $unitprice?>" >
            </div>
          </div>
          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Số Lượng </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="quantity"  value="<?php echo $quantity?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Mô Tả</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" name="des" value="<?php echo $des ?>" >
            </div>
          </div>
         
            
            <div class="col-lg-10" style="padding:10px 0px 0px 500px;">
                <input type="submit"  name = "btnupdate" value="Cập Nhật">
               
            
            </div>
        </form>
        
   
</div>
