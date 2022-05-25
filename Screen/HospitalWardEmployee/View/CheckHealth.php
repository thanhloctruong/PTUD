<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kiểm tra tình trạng bệnh nhân</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Kiểm tra tình trạng bệnh nhân</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

 <!-- action="CheckHealth.php?act=kiemtra" -->
<form class="contact-form mt-5"  method="POST">  
    <div class="container">
        <h1 class="text-center wow fadeInUp">Nhập mã hồ sơ bệnh nhân</h1>
        <div class="row mb-3">
            <div class="col-sm-3 input-group mb-3 wow fadeInLeft">
            </div>
            <div class="col-sm-6 input-group mb-3 wow fadeInLeft">
                <input type="text" class="form-control" name="txtTimKiem" placeholder="Nhập mã hồ sơ bệnh nhân..."<?php if(isset($_POST['txtTimKiem'])) {$id=$_POST['txtTimKiem'];  echo'value='.$id.''; } ?>>
                <div class="input-group-append">
                    <input type="submit" value="Tìm kiếm" name="search" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã hồ sơ</th>
      <th scope="col">Họ tên</th>
      
      <th scope="col">SDT</th>
      <!-- <th scope="col">Địa chỉ</th> -->
     
      <th scope="col">Tình trạng sức khỏe</th>
      
      <th scope="col">Kết Luận</th>
      <th scope="col">Ngày nhập viện</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['txtTimKiem'])){
         
        if(isset($_POST['search'])){
            $search=Search($_POST['txtTimKiem']); //trả về một mảng
            
       
          if(isset($search) && $search !=0){
             // echo "<p>".$search['TinhTrangSucKhoe']."</p>";
             echo "<tbody>
             <tr>
                <td scope='row'>".$search['MaHoSo']."</td>
                <td scope='row'>".$search['HoTen']."</td>
             
                <td scope='row'>".$search['SDT']."</td>
            
              
                <td scope='row'>".$search['TinhTrangSucKhoe']."</td>
                <td scope='row'>".$search['GhiChu']."</td>
                <td scope='row'>".$search['NgayNhapvien']."</td>
             </tr>
            
                </tbody>";
            } 
          

         
        else{
           echo'
             <h3 class="text-center wow fadeInUp" >Vui lòng nhập lại mã bệnh nhân</h3>
           ';
        }


        // else{
        //     echo "<h3 style='color:red;'>" . $txt_err_lg . "</h3>";
        // }
    }
    


  }
    ?>
  </tbody>
</table>



    <!-- if(isset($_POST['txtTimKiem'])){
      if(isset($_POST['search'])){
          $search=Search($_POST['txtTimKiem']); //trả về một mảng
      }
      else{
      }
    }
 ?> -->

    <!-- // if (isset($txt_err_lg) && ($txt_err_lg != "")) {
    //     echo "<h3 style='color:red;'>" . $txt_err_lg . "</h3>";
    // }
    // if(isset($search)){
    //     foreach($search as $abc){
    //         echo "<tbody>
    //         <tr>
    //           <th scope='row'>".$search['MaHoSo']."</th>
    //           <th scope='row'>".$search['TinhTrangSucKhoe']."</th>
    //           <th scope='row'>".$search['NgayNhapvien']."</th>
    //         </tr>
            
    //       </tbody>";
    //     }
        // echo "<p>".$search['TinhTrangSucKhoe']."</p>";
    // } -->