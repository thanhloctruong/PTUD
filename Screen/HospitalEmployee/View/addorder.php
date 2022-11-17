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
         
            <li class="breadcrumb-item active" aria-current="page">Tạo đơn mua hàng</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Tạo đơn mua hàng</h1>
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
            <label for="inputphone" class="col-sm-2 col-form-label">Đơn Giá </label>
            <div class="col-sm-10">
          <input type="text" class="form-control" name="unitprice" >
            </div>
          </div>

          <div class="form-group row">
            <label for="inputadd" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="shipaddress" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputname=" class="col-sm-2 col-form-label">Ngày đặt hàng</label>
            <div class="col-sm-10">
              <input type="date"  class="form-control"  name="orderdate"  >
            </div>
          </div>
         
         

      
         
        
        

          <!-- <div class="form-group row">
            <label for="inputemp" class="col-sm-2 col-form-label">Mã nhân viên tạo  </label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="emp" >
            </div>   -->
            <div class="form-group row">
            <label for="inputname=" class="col-sm-2 col-form-label">Ngày ship hàng</label>
            <div class="col-sm-10">
              <input type="date"  class="form-control"  name="shipdate"  >
            </div>
          </div>
            
          <div class="form-group row">
            <label for="inputname=" class="col-sm-2 col-form-label">Role </label>
            <div class="col-sm-10">
              <input type="text"  class="form-control"  name="Role"  >
            </div>
          </div>
           

            <div class="col-lg-10" style="padding:10px 500px 0px 500px;">
                <input type="submit"  name = "submitbtn" value="Thêm" style="margin-left:250px ;">
               
            
            </div>
           
        </form>
        
   
</div>
