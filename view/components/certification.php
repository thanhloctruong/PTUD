<?php
     include "components/cCetification.php";
     $thongtin =  ControlSelectCertification(1) ;
    //  echo "<pre>";
    //     print_r($thongtin);
    //  echo "</pre>";
     if($thongtin["GhiChu"]== "Dương tính"){
        echo "<script>alert('Bệnh nhân chưa khỏi bệnh, không thể kết xuất giấy xác nhận')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
     }

?>
    <div class="GXN">
        <div class="content-page px-0">
            <div class="container px-1">
                <div class="card p-sm-2 mt-2">
                    <div class="row ">

                        <div class="col-6 text-center text-uppercase mt-1">
                            <span>Sở y tế TP Hồ CHí Minh <br> TTYT quận gò vấp <br></span>
                        </div>
                        <div class="col-6 text-center  mt-1">
                            <span>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM <br> Độc lập - Tự do - Hạnh Phúc</span>
                        </div>
                        <div class="col-12 text-center text-uppercase mt-1">
                            <span> <br> <br> Giấy xác nhận tình trạng khỏi bệnh covid</span>
                        </div>
                    </div>
                    <br>
                    <div class="row col-12 mt-1 ml-5">
                        <div class="col-5 font-weight-bold mt-1 ">Họ tên:</div>
                        <div class="col-7 hoten mt-1"> <?= $thongtin ['HoTen'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Số điện thoại: </div>
                        <div class="col-7 sdt mt-1"><?= $thongtin  ['SDT'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Địa chỉ: </div>
                        <div class="col-7 diachi mt-1"><?= $thongtin  ['DiaChi'] ?></div>

                        <div class="col-5 font-weight-bold mt-1 " > Email: </div>
                        <div class="col-7 email mt-1"><?= $thongtin  ['Email'] ?></div>

                        <div class="col-5 font-weight-bold mt-1 " >Năm sinh:</div>
                        <div class="col-7 ngaysinh mt-1" ><?= $thongtin  ['NgaySinh'] ?></div>

                        <div class="col-5 font-weight-bold mt-1 ">CCCD: </div>
                        <div class="col-7 cccd mt-1"><?= $thongtin  ['CCCD'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Ngày khai báo:</div>
                        <div class="col-7 ngaykhaibao mt-1"><?= $thongtin  ['Ngaykhaibao'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Chuẩn đoán: </div>
                        <div class="col-7  mt-1"> Dương tính với Covid-19</div>

                        <div class="col-5 font-weight-bold mt-1 " >Ngày nhập viện:</div>
                        <div class="col-7 ngaynhapvien mt-1" > <?= $thongtin  ['NgayNhapvien'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Ngày khỏi bệnh:</div>
                        <div class="col-7 ngaykhoibenh mt-1" > <?= $thongtin  ['NgayKhoiBenh'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Kết luận: </div>
                        <div class="col-7 ngaykhoibenh mt-1" > Bệnh nhân đủ điều kiện hoàn thành cách ly và khỏi bệnh  </div>
                        
                        <div class="col-5 font-weight-bold mt-1 " >Yêu cầu:</div>
                        <div class="col-7 ngaykhoibenh mt-1 mb-5" >Bệnh nhân theo dõi sức khỏe 7 ngày và thực hiện 5K theo quy định của Bộ Y tế </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
