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
            <select name="txtcoso" class="form-control col-md-7" id="mySelect" onchange="myFunction()">
            <option value="">---</option>
            <?php
                foreach($RegisterForTreatment as $tencsyt)
                {
                echo "<option value='".$tencsyt["ThongTin"]."'>".$tencsyt["TenCSYT"]."</option>";
                }
            ?>
            </select>
        </div>
        <div class="tokhai row">
            <label for="txttt" class="col-md-4 text-center">Thông tin:</label>
            <p id="demo" class="form-control col-md-7"></p>
            <script>
                function myFunction() {
                var x = document.getElementById("mySelect").value;
                document.getElementById("demo").innerHTML = "" + x;
                }
            </script>
        </div>
        <!-- <div class="tokhai row">
           <label for="txtdangnhap" class="col-md-4 text-center">Tên đăng nhập:</label>
           <input type="text" name="txtdangnhap" class="form-control col-md-7" >
        </div>        -->
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
                                        </table>
                                    </div>
                                </div>
        </div>
        <div class="tokhai row">
            <label for="txtdate" class="col-md-4 text-center">Ngày yêu cầu:</label>
            <input type="text" class="form-control col-md-7" name="txtdate" value="<?php $time=getdate(); echo $time['year']."-".$time['mon']."-".$time['mday'];?>" readonly>
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
