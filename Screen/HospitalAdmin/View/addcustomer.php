

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
            <li class="breadcrumb-item active" aria-current="page">Quản Lý Khách Hàng</li>
            <li class="breadcrumb-item active" aria-current="page">Thêm Khách Hàng</li>
            
          </ol>
        </nav>
        <h1 class="font-weight-normal">Thêm Khách Hàng</h1>
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
            <label for="inputname=" class="col-sm-2 col-form-label">Tên khách hàng</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="name"  >
            </div>
          </div>
         
          <div class="form-group row">
            <label for="inputadd" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="address" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputphone" class="col-sm-2 col-form-label">Số Điện Thoại </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" name="email" >
            </div>
          </div>

          <div class="form-group row">
            <label for="inputemp" class="col-sm-2 col-form-label">Mã nhân viên tạo  </label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="emp" >
            </div>  
          <div class="form-group row " style="padding-top: 20px; margin-left:16px">
            <label for="inputdate" class=" col-form-label">Ngày Sinh</label>
            <div class="col-sm-10">
              <input type="date"  class="form-control"  name="date"  style="margin-left:140px">
            </div>
            
        
           

            <div class="col-lg-10" style="padding:10px 500px 0px 500px;">
                <input type="submit"  name = "submitbtn" value="Thêm" style="margin:30px 0px 0px 80px ;" class="btn btn-primary ml-lg-6 "> 
                <a class="btn btn-primary ml-lg-6 " style="margin-left:250px;margin-top:-68px" href="index.php?act=quanlyttbv">Back</a>
            </div>
        </form>
       
        
   
</div>