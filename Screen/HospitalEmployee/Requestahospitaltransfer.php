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
<div></div>
    <form action="index.php?act=yeucau" method="POST">

        <div class="row justify-content-center">
            <h4 class="b123 text-center"><b>Phiếu yêu cầu chuyển viện</b></h4>
        </div>
        <!-- <div class="tokhai row">
            <label for="txtmahs" class="col-md-4 text-center">Mã hồ sơ:</label>
            <input type="text" class="form-control col-md-7" name="txtmash" >
        </div> -->
        <!-- <div class="tokhai row">
            <label for="txtname" class="col-md-4 text-center">Họ tên bệnh nhân:</label>
            <input type="text" class="form-control col-md-7" name="txtname" >
        </div> -->
        <div class="tokhai row">
            <label for="txthoso" class="col-md-4 text-center">Mã hồ sơ:</label>
            <input type="text" class="form-control col-md-7" name="txthoso">
        </div>
        <div class="tokhai row">
            <label for="txttk" class="col-md-4 text-center">Họ Tên Bệnh Nhân:</label>
            <input type="text" class="form-control col-md-7" name="txttk">
        </div>
        <div class="tokhai row">
            <label for="txttinhtrang" class="col-md-4 text-center">Mức độ bệnh:</label>
            <input type="text" class="form-control col-md-7" name="txttinhtrang" >
        </div>
        <div class="tokhai row">
            <label for="txtdate" class="col-md-4 text-center">Ngày yêu cầu:</label>
            <input type="Date" class="form-control col-md-7" name="txtdate" >
        </div>
        <!-- <div class="tokhai row">
            <label for="txttang" class="col-md-4 text-center">Tầng yêu cầu:</label>
            <input type="text" class="form-control col-md-7" name="txttang" >
        </div> -->
        <div class="tokhai row">
            <label for="txtbenhvien" class="col-md-4 text-center">Mã bệnh viện:</label>
            <input type="text" class="form-control col-md-7" name="txtbenhvien">
            <!-- <select  name="txtbenhvien" class=col-md-7>
                <option value=""></option>
            </select> -->
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
