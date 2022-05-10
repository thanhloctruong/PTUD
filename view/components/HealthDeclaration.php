<form action="#" enctype="multipart/form-data" method="POST">
    <div class="KBYT">
        <div block-bind="content" id="content">
            <div class="container px-1">
                <div class="card p-sm-2 mt-2">
                    <div class="row ">
                        <div class="col-12 text-center text-uppercase mt-1">
                            <span>
                                <span class="text_donvi_ten">Thông tin khai báo y tế</span>
                            </span>
                        </div>
                        <div class="col-12 d-flex ">
                            <div class="custom-control custom-radio mt-2 mr-2">
                                <input name="loaiKhaiBao" type="radio" value="Bệnh nhân/Người nhà" />Bệnh nhân/Người nhà
                                <input name="loaiKhaiBao" type="radio" value="Theo dõi sức khỏe tại nhà" />Theo dõi sức
                                khỏe tại nhà
                            </div>
                            
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-12 donvi_khaibao">
                            <div class="form-group">
                                <span class="text_donvi">Nơi khai báo</span><span class="text-danger">(*) </span>:
                                <input type="text" name="NoiKhaiBao" class="form-control"
                                    placeholder="Nhập và chọn nơi khai báo" require>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <span class="text_phone">Số điện thoại</span><span class="text-danger"> (*)</span>:
                                <input type="text" name="sdt" class="form-control" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <span class="text_fullname">Họ và tên</span> <span class="text-danger">(*)</span>:
                                <input type="text" name="hoten" class="form-control text-uppercase"
                                    placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <span class="text_fullname">Tiền sử bệnh nền</span> <span
                                    class="text-danger">(*)</span>:
                                <input type="text" name="tiensubenh" class="form-control"
                                    placeholder="nhập lịch sử bệnh nền(viêm phổi, viêm phế quản....)">
                            </div>
                        </div>
                        <div class="col-12 wrap_trieuchung">
                            <div class="form-group">
                                <span class="text_note_1 text-primary font-weight-bold">Trong 14 ngày qua, Bạn có những
                                    triệu chứng nào</span><span class="text-danger"> (*)</span>:
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

                            <div class="form-group xacnhan_dichte">
                                <span class="text_note_2 text-primary font-weight-bold">Trong vòng 14 ngày qua vừa qua,
                                    bạn có từng: </span><span class="text-danger">
                                    (*)</span>:
                                <div class="table-responsive mt-1">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th><span class="text_epidemiological_factors">Yếu tố dịch tễ</span>
                                                    <span class="text-danger">(*)</span>
                                                </th>
                                                <th width="15%" class="text-center text_yes">Có</th>
                                                <th width="15%" class="text-center text_no">Không</th>
                                            </tr>
                                        </thead>
                                        <tbody id="list-dichte">
                                            <tr>
                                                <td>1. Bạn có đang mắc COVID-19 không? <span
                                                        class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="coMacCoVid" name="dichte_coMacCoVid"
                                                        class="radio-dichte" value="Đang mắc covid">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="coMacCoVid" name="dichte_coMacCoVid"
                                                        value="" class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2. Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày
                                                    qua <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="tiepXucGan" name="dichte_tiepXucGan"
                                                        class="radio-dichte" value="Có tiếp xúc với ca nhiễm">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="tiepXucGan" name="dichte_tiepXucGan"
                                                        value="" class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3. Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua
                                                    <span class="text-danger">(*)</span>
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="diNoiKhac" name="dichte_diNoiKhac"
                                                        class="radio-dichte" value="Đi tới vùng lãnh thổ khác">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="diNoiKhac" name="dichte_diNoiKhac" value=""
                                                        class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4. Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua không?
                                                    <span class="text-danger">(*)</span>
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="cachlyTapTrung" name="dichte_cachlyTapTrung"
                                                        class="radio-dichte" value="Cách ly tập trung">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="cachlyTapTrung" value=""
                                                        name="dichte_cachlyTapTrung" class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5. Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt hay
                                                    ho không? <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dauhieu" name="dichte_dauhieu"
                                                        class="radio-dichte" value="Có người thân bị covid">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dauhieu" name="dichte_dauhieu" value=""
                                                        class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6. Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua
                                                    không? <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dieuTri" name="dichte_dieuTri"
                                                        class="radio-dichte" value="Có điều trị covid">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dieuTri" name="dichte_dieuTri"
                                                        class="radio-dichte" value="" checked="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <span class="col-12 text-center">*Mọi dữ liệu cung cấp đều được bảo mật, phục vụ cho việc điều trị
                        và phòng chống dịch.
                        Bấm “Gửi tờ khai” nếu như bạn đã hiểu và đồng ý.</span>

                </div>
            </div>
            <div class="row">
                <div class="col-12 my-3 text-center">
                    <div class="btn-group w-50"><button type="submit" name="btnsave"
                            class="btn btn-primary width-sm ml-1">Gửi</button></div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
// function input_data($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// $LoaiKhaiBaoErr=$NoiKhaiBaoErr = $SdtErr = $NameErr= $BenhnenErr="";

// if ($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     if (empty($_POST["NoiKhaiBao"])) {
//         $NoiKhaiBaoErr = "Nơi Khai Báo là bắt buộc";
//     } else {
//         $NoiKhaiBao = input_data($_POST["NoiKhaiBao"]);
//         // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
//         if (!preg_match("/^[a-zA-Z ]*$/",$NoiKhaiBao)) {
//             $NoiKhaiBaoErr = "Bạn chỉ được nhập chữ cái và khoảng trắng.";
//         }
//     }

//     if (empty($_POST["hoten"])) {
//         $NameErr = "Họ tên là bắt buộc";
//     } else {
//         $name = input_data($_POST["name"]);
//         // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
//         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//             $NameErr = "Bạn chỉ được nhập chữ cái và khoảng trắng.";
//         }
//     }

//     if (empty($_POST["sdt"])) {
//         $SdtErr = "Số điện thoại là bắt buộc.";
//     } else {
//         $sdt = input_data($_POST["sdt"]);
//         // Kiểm tra xem số điện thoại đã đúng định dạng hay chưa 
//         if (!preg_match ("/^[0-9]*$/", $sdt) ) {
//             $SdtErr = "Bạn chỉ được nhập giá trị số.";
//         }
//         //Kiểm tra độ dài của số điện thoại 
//         if (strlen ($sdt) != 10) {
//             $SdtErr = "Số điện thoại phải là 10 ký tự.";
//         }
//     }
//     if (empty ($_POST["loaiKhaiBao"])) {
//         $LoaiKhaiBaoErr = "Loại khai báo là trường bắt buộc.";
//     } else {
//         $LoaiKhaiBao = input_data($_POST["loaiKhaiBao"]);
//     }
//     if (empty($_POST["tiensubenh"])) {
//         $BenhnenErr = "Họ tên là bắt buộc";
//     } else {
//         $Benhnen = input_data($_POST["tiensubenh"]);
//         // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
//         if (!preg_match("/^[a-zA-Z ]*$/",$Benhnen)) {
//             $BenhnenErr = "Bạn chỉ được nhập chữ cái và khoảng trắng.";
//         }
//     }

// }
// if(isset($_POST['save'])) {
//     if($NoiKhaiBaoErr== "" && $SdtErr == "" && $NameErr == "" && $LoaiKhaiBaoErr == "" && $websiteErr == "" && $agreeErr == "") {
//         echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";
//         echo "<h2>Your Input:</h2>";
//         echo "Name: " .$name;
//         echo "<br>";
//         echo "Email: " .$email;
//         echo "<br>";
//         echo "Mobile No: " .$mobileno;
//         echo "<br>";
//         echo "Website: " .$website;
//         echo "<br>";
//         echo "Gender: " .$gender;
//     } else {
//         echo "<h3> <b>Bạn chưa nhập đầy đủ thông tin hoặc chưa hợp lệ.</b> </h3>";
//     }
// }

if (isset($_REQUEST['btnsave'])) {
    $trieuChung = $dichte = array();
    if (!empty($_REQUEST['trieuchung_sot'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_sot']);
    }
    if (!empty($_REQUEST['trieuchung_ho'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_ho']);
    }
    if (!empty($_REQUEST['trieuchung_dauhong'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_dauhong']);
    }
    if (!empty($_REQUEST['trieuchung_met'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_met']);
    }
    if (!empty($_REQUEST['trieuchung_khotho'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_khotho']);
    }
    if (!empty($_REQUEST['trieuchung_khac'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_khac']);
    }

    if (!empty($_REQUEST['dichte_coMacCoVid'])) {
        array_push($dichte, $_REQUEST['dichte_coMacCoVid']);
    }
    if (!empty($_REQUEST['dichte_tiepXucGan'])) {
        array_push($dichte, $_REQUEST['dichte_tiepXucGan']);
    }
    if (!empty($_REQUEST['dichte_diNoiKhac'])) {
        array_push($dichte, $_REQUEST['dichte_diNoiKhac']);
    }
    if (!empty($_REQUEST['dichte_cachlyTapTrung'])) {
        array_push($dichte, $_REQUEST['dichte_cachlyTapTrung']);
    }
    if (!empty($_REQUEST['dichte_dauhieu'])) {
        array_push($dichte, $_REQUEST['dichte_dauhieu']);
    }
    if (!empty($_REQUEST['dichte_dieuTri'])) {
        array_push($dichte, $_REQUEST['dichte_dieuTri']);
    }
    include "components/cHeathDeclaration.php";

    $checkthanhcong = insertKhaiBaoYTe($_REQUEST['loaiKhaiBao'], $_REQUEST['NoiKhaiBao'], $_REQUEST['sdt'], $_REQUEST['hoten'], $_REQUEST['tiensubenh'], implode(",", $trieuChung), implode(",", $dichte), '1');
    var_dump($checkthanhcong);
    if ($checkthanhcong == null) {
        echo "<script>alert('Khai Báo Thành Công')</script>";
        header('location: Controller/index.php');
    } else {
        echo "<script>alert('Khai Báo Thất Bại')</script>";
        header('location: Controller/index.php');
    }
}


?>