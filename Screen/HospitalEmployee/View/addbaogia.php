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
         
            <li class="breadcrumb-item active" aria-current="page">Tạo báo giá NCC</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Tạo báo giá NCC</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
<!-- -------------------------------------------//--------------------------------------- -->

<div class="container1">
  
       <form class="form" method="post" > 
           
         <!-- <div class="form-group row">
            <label for="inputid" class="col-sm-2 col-form-label">Mã khách hàng</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="idbenhvien" >
            </div>
          </div> -->
          
          <div class="form-group row">
            <label for="inputemail" class="col-sm-2 col-form-label">Tên sản phẩm</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" name="productname" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputemail" class="col-sm-2 col-form-label">Số Lượng</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" name="productname" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputname=" class="col-sm-2 col-form-label">Ngày đặt hàng</label>
            <div class="col-sm-10">
              <input type="date"  class="form-control"  name="orderdate"  >
            </div>
          </div>

          <div class="form-group row">
            <label for="inputship=" class="col-sm-2 col-form-label">Ngày đặt hàng</label>
            <div class="col-sm-10">
              <input type="date"  class="form-control"  name="shipdatedate"  >
            </div>
          </div>
         
          <div class="form-group row">
            <label for="inputaddress" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="shipaddress" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputphone" class="col-sm-2 col-form-label">Gía </label>
            <div class="col-sm-10">
          <input type="text" class="form-control" name="unitprice" >
            </div>
          </div>
        

          <!-- <div class="form-group row">
            <label for="inputemp" class="col-sm-2 col-form-label">Mã nhân viên tạo  </label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="emp" >
            </div>   -->
         
            
            <li class="nav-item">
            <a class="btn btn-primary ml-lg-6 " style="margin-left:45%  " href="index.php?act=addbaogia">Tạo</a>
          </li>
        </form>
        
   
</div>
