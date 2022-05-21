<!-- <div>Đăng ký điều trị</div> -->
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
    <form action="index.php?act=dangkydieutri" method="POST">

        <div class="row justify-content-center">
            <h4 class="b123 text-center"><b>Đăng ký điều trị</b></h4>
        </div>
        <!-- <div class="tokhai row">
            <label for="txtmahs" class="col-md-4 text-center">Mã hồ sơ:</label>
            <input type="text" class="form-control col-md-7" name="txtmash" >
        </div> -->
        <div class="tokhai row">
            <label for="txtcoso" class="col-md-4 text-center">Cơ sở y tế</label>
            <select name="txtcoso" class="form-control col-md-4 ">
            <?php
                foreach($RegisterForTreatment as $bcd)
                {
                echo "<option value=''>".$bcd["TenCSYT"]."</option>";
                }
            ?>
            </select>
        </div>
        <div class="tokhai row">
            <label for="txttt" class="col-md-4 text-center">Thông tin:</label>
            <input type="text" class="form-control col-md-7" name="txttt" value="<?php echo $bcd['ThongTin'] ?>">
        </div>
                
        <div class="tokhai row">
            <label for="txttinhtrang" class="col-md-4 text-center">Tình trạng bệnh:</label>
            <!-- <input type="text" class="form-control col-md-7" name="txttinhtrang" > -->
            <div class="form-group col-md-7">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text_symptoms">Dấu hiệu</th>
                                                    <th width="15%" class="text-center text_yes">Có</th>
                                                    <th width="15%" class="text-center text_no">Không</th>
                                                </tr>
                                            </thead>

                                            <tr>
                                                <td>Sốt <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="sot" name="trieuchung_sot"
                                                        class="radio-trieuchung" value="Sốt ">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="sot" name="trieuchung_sot"
                                                        class="radio-trieuchung" value="" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ho <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="ho" name="trieuchung_ho"
                                                        class="radio-trieuchung" value="Ho ">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="ho" name="trieuchung_ho"
                                                        class="radio-trieuchung" value="" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Đau họng <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dauhong" name="trieuchung_dauhong"
                                                        class="radio-trieuchung" value="Đau họng">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dauhong" name="trieuchung_dauhong"
                                                        class="radio-trieuchung" value="" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Mất vị/Mất mùi <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="matViGiac" name="trieuchung_matViGiac"
                                                        class="radio-trieuchung" value="Mất vị giác">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="matViGiac" name="trieuchung_matViGiac"
                                                        class="radio-trieuchung" value="" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Cảm giác mệt <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="met" name="trieuchung_met"
                                                        class="radio-trieuchung" value="Mệt">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="met" name="trieuchung_met"
                                                        class="radio-trieuchung" value="" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Khó thở <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="khotho" name="trieuchung_khotho"
                                                        class="radio-trieuchung" value="Khó thở">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="khotho" name="trieuchung_khotho"
                                                        class="radio-trieuchung" value="" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Triệu chứng/dấu hiệu khác <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="khac" name="trieuchung_khac"
                                                        class="radio-trieuchung" value="Triệu chứng khác">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="khac" name="trieuchung_khac"
                                                        class="radio-trieuchung" value="" checked="">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
        </div>
        <div class="tokhai row">
            <label for="txtdate" class="col-md-4 text-center">Ngày yêu cầu:</label>
            <input type="Date" class="form-control col-md-7" name="txtdate" >
        </div>
        <!-- <div class="tokhai row">
            <label for="txttang" class="col-md-4 text-center">Tầng yêu cầu:</label>
            <input type="text" class="form-control col-md-7" name="txttang" >
        </div> -->
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
