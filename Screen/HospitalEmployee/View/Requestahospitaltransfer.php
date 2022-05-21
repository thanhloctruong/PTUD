<!--<div>Yêu cầu chuyển viện</div>-->
<style>
    .b123
    {
        margin: 20px;
    }
    .tokhai{
        margin-bottom: 10px;
    }
</style>
<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Yêu cầu chuyển viện</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Yêu cầu chuyển viện</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div>
<div>
        <div class="row justify-content-center">
            <h4 class="b123 text-center"><b>Phiếu yêu cầu chuyển viện</b></h4>
        </div>
        <!-- <div class="tokhai row">
            <label for="txtmahs" class="col-md-4 text-center">Mã hồ sơ:</label>
            <input type="text" class="form-control col-md-7" name="txtmash" >
        </div> -->
        <div class="tokhai row">
            <label for="txthoso" class="col-md-4 text-center">Mã hồ sơ:</label>
            <input type="text" class="form-control col-md-7" name="txthoso" value="<?php  echo $search['MaHoSo']?>" readonly>
        </div>
        <div class="tokhai row">
            <label for="txtname" class="col-md-4 text-center">Họ tên bệnh nhân:</label>
            <input type="text" class="form-control col-md-7" name="txtname" value="<?php echo $search['HoTen'] ?>" readonly> 
        </div>
        <!-- <div class="tokhai row">
            <label for="txttk" class="col-md-4 text-center">Mã Tài khoản:</label>
            <input type="text" class="form-control col-md-7" name="txttk" >
        </div> -->
        <div class="tokhai row">
            <label for="txttinhtrang" class="col-md-4 text-center">Mức độ bệnh:</label>
            <select name="txttingtrang" class="form-control col-md-7">
                <option value="    "></option>
                <option value="muc1">Mức độ 1</option>
                <option value="muc2">Mức độ 2</option>
                <option value="muc3">Mức độ 3</option>
                <option value="muc4">Mức độ 4</option>
                <option value="muc5">Mức độ 5</option>
            </select>
        </div>
        <div class="tokhai row">
            <label for="txtdate" class="col-md-4 text-center">Ngày yêu cầu:</label>
            <input type="text" class="form-control col-md-7" name="txtdate" value="<?php $time=getdate(); echo $time['mday']."/".$time['mon']."/".$time['year'];?>" readonly>
        </div>
        <div class="tokhai row">
            <label for="txttang" class="col-md-4 text-center">Tầng yêu cầu:</label>
            <select name="txttang" class="form-control col-md-7">
                 <option value=""></option> 
            </select>
        </div>
        <div class="tokhai row">
            <label for="txtbenhvien" class="col-md-4 text-center">Tên bệnh viện:</label>
            <input type="text" class="form-control col-md-7" name="txtbenhvien">
        </div>
        <div class="tokhai row d-flex justify-content-center pr-2 border-bottom">
            <input type="submit" class="btn btn-primary" name="btnsubmit" value="Gửi yêu cầu">
        </div>
    </form>
</div> 
<!-- <div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-12 left">
            <h4 class="b123 text-center"><b>Yêu cầu chuyển viện</b></h4>
            <table class="table table-bordered table-light table-hover">
                <thead class="bg-primary text-white">
                    <tr class="text-align-center">
                        <th scope="col">STT</th>
                        <th scope="col">Mã hồ sơ</th>
                        <th scope="col">Họ tên bệnh nhân</th>
                        <th scope="col">Tình trạng bệnh</th>
                        <th scope="col">Ngày yêu cầu</th>
                        <th scope="col">Tầng yêu cầu</th>
                        <th scope="col">Bệnh viện yêu cầu</th>
                        <th scope="col">Xác nhận</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <div class="d-flex justify-content-center pr-2">
                <button type="submit" class="btn btn-primary rounded-circle">Lưu cập nhật </button>
            </div>
        </div>
    </div>
</div> -->
