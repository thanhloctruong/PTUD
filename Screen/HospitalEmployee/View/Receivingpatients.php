<!-- <div> tiep nhan benh nhan </div> -->
<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tiếp nhận bệnh nhân</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Tiếp nhận bệnh nhân</h1>
        </div> 
    </div> 
</div>
<div>
    <form class="contact-form mt-5" action="index.php?act=tiepnhan" method="POST">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Nhập mã hồ sơ bệnh nhân</h1>
            <div class="row mb-3">
                <div class="col-sm-3 input-group mb-3 wow fadeInLeft">
                </div>
                <div class="col-sm-6 input-group mb-3 wow fadeInLeft">
                    <input type="text" class="form-control" name="txttimkiem" placeholder="Nhập mã hồ sơ bệnh nhân...">
                    <div class="input-group-append">
                        <input type="submit" value="Tìm kiếm" name="search" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">MHS</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Tình trạng sức khỏe</th>
      <th scope="col">Ngày yêu cầu</th>
      <th scope="col">Xác nhận</th>
    </tr>
  </thead>
  <tbody>
      <?php
      if(!isset($_POST['search']))
      {
        $sql=get_all();
        $i=0;
        foreach($sql as $row)
        $i++;
    ?>
        <tr>
            <th scope="row"><?php echo $row['MaHoSo']?></th>
            <th scope='row'><?php echo $row['HoTen']?></th>
            <th scope='row'><?php echo $row['MoTa']?></th>
            <th scope='row'><?php echo $row['NgayYeuCau']?></th>
            <th scope='row'>Xác nhận</th>
        </tr>
      <?php     
      }
      else if(isset($_POST['search']))
      {
        $timkiem=$_POST['txttimkiem'];
        $sql=get_thongke($timkiem);
    ?>
        <tr>
            <th scope="col"><?php echo $sql['MaHoSo']?></th>
            <th scope='col'><?php echo $sql['HoTen']?></th>
            <th scope='col'><?php echo $sql['MoTa']?></th>
            <th scope='col'><?php echo $sql['NgayYeuCau']?></th>
            <th scope='col'>Xác nhận</th>
        </tr>
      <?php  
      }
      ?>
      
  </tbody>
</table>
